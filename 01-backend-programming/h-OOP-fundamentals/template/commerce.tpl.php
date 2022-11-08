<section id="commercial">
    <h2>
        Commercial properties for to rent:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['properties'] as $index => $property) {
                echo "
                    <ul class='box'>
                        <li>" . $property->getAddress() . "</li>
                        <li> R" . $property->getPrice() . " /m </li> 
                        <br>
                        <button>
                            Rent
                        </button>
                    </ul>
                ";
            }
        ?>
    </div>
</section>