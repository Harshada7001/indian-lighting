<h3>Search Results</h3>

<?php if ($type === 'supplier'): ?>
    <?php if (!empty($results)) : ?>
        <?php foreach ($results as $supplier): ?>
            <div class="card mb-3 p-3">
                <h4><?= $supplier->company_name ?></h4>
                <p><i class="fa fa-user"></i> <?= $supplier->contact_person ?></p>
                <p><i class="fa fa-map-marker"></i> <?= $supplier->address ?></p>
                <p><i class="fa fa-envelope"></i> <?= $supplier->email ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No suppliers found.</p>
    <?php endif; ?>

<?php elseif ($type === 'product'): ?>
    <?php if (!empty($results)) : ?>
        <?php foreach ($results as $product): ?>
            <div class="card mb-3 p-3">
                <h4><?= $product->product_name ?></h4>
                <p><i class="fa fa-tag"></i> ₹<?= $product->price ?></p>
                <p><i class="fa fa-industry"></i> Supplier: <?= $product->company_name ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No products found.</p>
    <?php endif; ?>
<?php endif; ?>
