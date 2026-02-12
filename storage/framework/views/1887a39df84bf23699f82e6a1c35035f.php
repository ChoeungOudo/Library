<!DOCTYPE html>
<html>
<head>
    <title>Book Detail</title>
</head>
<body>

<?php if($book): ?>
    <h1><?php echo e($book['title']); ?></h1>

<p><strong>Author:</strong> <?php echo e($book['author']); ?></p>

<p><?php echo e($book['description']); ?></p>

<a href="/">← Back to Home</a>

<?php endif; ?>

<a href="/">← Back to Home</a>

</body>
</html>
<?php /**PATH C:\breeze-2.x\breeze-2.x\myproject\resources\views/book-detail.blade.php ENDPATH**/ ?>