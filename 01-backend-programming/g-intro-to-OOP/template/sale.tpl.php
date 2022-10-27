<section id="for-sale">
    <h2>
        Residential properties for sale:
    </h2>
    <div class="section">
        <?php
            foreach ($_SESSION['dummyData'] as $index => $data) {
                echo "
                    <ul class='box'>
                        <li>" . $data['address'] . "</li>
                        <li>" . $data['rooms'] . "</li>
                        <li> R" . $data['rent'] . "00 </li> 
                        <br>
                        <button>
                            Buy
                        </button>
                    </ul>
                ";
            }
        ?>
    </div>
</section>