<section id="commercial">
    <h2>
        Commercial properties for to rent:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['dummyData'] as $index => $data) {
                echo "
                    <ul class='box'>
                        <li>" . $data['address'] . "</li>
                        <li>" . $data['rooms'] . "</li>
                        <li> R" . $data['rent'] . " /m </li> 
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