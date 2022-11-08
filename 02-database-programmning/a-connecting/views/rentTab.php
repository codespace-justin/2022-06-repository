<section id="for-rent">
    <h2>
        Residential properties for rent:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['properties'] as $index => $property) {

                if (get_class($property) == "ResidentialProperty" && $property->getOffering() == "rent" ) {

                    echo "
                        <ul class='box'>
                            <li>" . $property->getAddress() . "</li>
                            <li> R" . $property->getPrice() . " /m2 </li> 
                            <br>
                            <button>
                                Rent
                            </button>
                        </ul>
                    ";
                }
            }
        ?>
    </div>
</section>