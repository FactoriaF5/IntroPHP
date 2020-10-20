
 <section>
        <h3>Simple Array - required</h3>
        <ul>
            <?php
            $list = ["uno", "dos", "tres"];
            var_dump($list);
            foreach ($list as $item) {
                echo "<li>${item}</li>";
            }
            ?>
        </ul>
  </section>
