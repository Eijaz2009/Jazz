<?php

class ParticipateView extends ParticipateController{
    public function show(){
        $participates = $this->getParticipate();

        foreach ($participates as $participate) { ?>
            <tr>
                <td><?php echo $participate['ID']; ?></td>
                <td><?php echo $participate['NAME']; ?></td>
                <td><?php echo $participate['PRICE']; ?></td>
                <td><?php echo $participate['STOCK']; ?></td>
            </tr>
<?php
        }
    }

    public function find()
    {
        $detailParticipate = $this->getParticipateBy();
        if(empty($detailParticipate))
            return;
        foreach ($detailParticipate as $detail) { ?>
            <div>
                <h3><?php echo $detail['NAME']; ?></h3>
                <p>ID: <?php echo $detail['ID']; ?></p>
                <p>NAME: <?php echo $detail['NAME']; ?></p>
                <p>PRICE: <?php echo $detail['PRICE']; ?></p>
                <p>STOCK: <?php echo $detail['STOCK']; ?></p>
            </div>
            <?php
        }
    }
}
            ?>