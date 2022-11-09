<section id="for-sale">
    <h2>
        Residential properties for sale:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['properties'] as $index => $property) {

                if (get_class($property) == "ResidentialProperty" && $property->getOffering() == "sale" ) {

                    echo "
                        <ul class='box'>
                            <li>" . $property->getAddress() . "</li>
                            <li> R: " . $property->getPrice() . "</li> 
                            <li> Rooms: " . $property->getNumRooms() . "</li>
                            <br>
                            <button>
                                Buy
                            </button>
                        </ul>
                    ";
                }
            }
        ?>
    </div>
</section>