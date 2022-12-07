<section id="commercial">
    <h2>
        Commercial properties for to rent:
    </h2>
    <div class="section">
        
        <?php
            foreach ($_SESSION['properties'] as $index => $property) {

                if (get_class($property) == "CommercialProperty") {

                    echo "
                        <ul class='box'>
                            <img src='". $property->getThumbnail() ."' alt='thumb' width=200 height=200>
                            <li>" . $property->getAddress() . "</li>
                            <li> R: " . $property->getPrice() . " per m2 </li> 
                            <li> Size: " . $property->getSizeInMetres() . "m </li> 
                            <li> Floors: " . $property->getFloors() . "</li>
                            <br>
                            <button>
                                Lease
                            </button>
                        </ul>
                    ";
                }
            }
        ?>
    </div>
</section>