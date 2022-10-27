<?php 

session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// ------------------------- Variables ---------------------------

// datastore
if ( !isset($_SESSION['paintCatalogue']) ) {
  
    $_SESSION ['paintCatalogue'] = [
        "#001" => "Green",
        "#002" => "Blue"
    ];

}
//$paintCatalogue = ["Green", "Blue"];


// ------------------------- CRUD ---------------------------


// --- Create ---
function create($datastore, $newItemId, $newItem) {

    // array_push($datastore, $newItem);
    $datastore[$newItemId] = $newItem;

    return $datastore;
}


// --- ReadById ---
function readById($datastore, $searchedId) {

    foreach ($datastore as $itemId => $item) {

        if ($searchedId == $itemId) {

            return $datastore[$itemId];
            break;
        }
    }
}


// --- Update ---
function update($datastore, $existingId, $newItem) {

    foreach ($datastore as $itemId => $item) {
        
        if ($existingId == $itemId) {
            
            // array_splice()
            $datastore[$itemId] = $newItem;
        }
    }

    return $datastore;
}


// --- delete ---
function deleteById($datastore, $searchedId) {

    foreach ($datastore as $itemId => $item) {

        if ($searchedId == $itemId) {

            // array_splice($datastore, $itemId, 1);
            unset($datastore[$itemId]);
        } 
    }

    return $datastore;
}


// ------------------------- APP ---------------------------


echo "<h2> List of all paints in Catalogue </h2>";

echo "<ul>";

    foreach ($paintCatalogue as $paintId => $paintValue) {
        echo "
            <li>
                $paintId : $paintValue
            </li>
        ";
    }

echo "</ul>";

// -------------------- Tests ----------------------------

// create
$paintCatalogue = create($paintCatalogue, "#1234", "purple");
print_r($paintCatalogue);

echo "<br>";

// read
echo readById($paintCatalogue, "#1234");

echo "<br>";

// update
$paintCatalogue = update($paintCatalogue, "#1234", "orange");
print_r($paintCatalogue);

echo "<br>";

// delete
$paintCatalogue = deleteById($paintCatalogue, "#001");
print_r($paintCatalogue);
