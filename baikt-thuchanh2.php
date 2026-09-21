bài 2

<?php
// 1. Tạo mảng kết hợp chứa danh sách các sản phẩm
$products = [
    [
        "name" => "Sản phẩm A",
        "price" => 150000,
        "quantity" => 3
    ],
    [
        "name" => "Sản phẩm B",
        "price" => 200000,
        "quantity" => 2
    ],
    [
        "name" => "Sản phẩm C",
        "price" => 50000,
        "quantity" => 5
    ]
];

// 2. Hiển thị thông tin tất cả sản phẩm
echo "=== DANH SÁCH SẢN PHẨM ===\n";
foreach ($products as $index => $product) {
    echo "Sản phẩm " . ($index + 1) . ":\n";
    echo "- Tên: " . $product['name'] . "\n";
    echo "- Giá: " . number_format($product['price']) . " VNĐ\n";
    echo "- Số lượng: " . $product['quantity'] . "\n";
}

// 3. Viết hàm tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotalPrice($productList) {
    $total = 0;
    foreach ($productList as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}

// Gọi hàm và in ra tổng giá trị
$totalValue = calculateTotalPrice($products);
echo "Tổng giá trị của tất cả sản phẩm: " . number_format($totalValue) . " VNĐ\n";
?>
