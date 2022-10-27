<section id="for-rent">
    <h2>
        Residential properties for rent:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['dummyData'] as $index => $data) {
                echo "
                    <ul class='box'>
                        <li>" . $data['address'] . "</li>
                        <li>" . $data['rooms'] . "</li>
                        <li> R" . $data['rent'] . " /pm </li> 
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