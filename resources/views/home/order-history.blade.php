<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
        }
        .card {
            border: none;
            margin-bottom: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .order-badge {
            font-size: 0.85rem;
            font-weight: bold;
            border-radius: 12px;
            padding: 0.3rem 0.75rem;
        }
        .status-completed {
            background-color: #28a745;
            color: white;
        }
        .status-pending {
            background-color: #ffc107;
            color: black;
        }
        .status-cancelled {
            background-color: #dc3545;
            color: white;
        }
        .order-number {
            font-size: 1.25rem;
            font-weight: 600;
            color: #495057;
        }
        .order-date {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .table-custom th, .table-custom td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <a href="{{ route('home') }}" class="text-muted float-end fs-5">Home</a>
    <h2 class="text-center mb-4">Order History</h2><br>

    <div class="row">
        <!-- Order Card 1 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="order-number">Order #12345</span>
                            <p class="order-date">Placed on: 12th September 2024</p>
                        </div>
                        <span class="order-badge status-completed">Completed</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom table-borderless">
                            <thead class="text-muted">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tour Package A</td>
                                    <td>$500</td>
                                    <td>2</td>
                                    <td>$1000</td>
                                </tr>
                                <tr>
                                    <td>Car Rental</td>
                                    <td>$50</td>
                                    <td>1</td>
                                    <td>$50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <p class="mb-0"><strong>Total: $1050</strong></p>
                        <a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
   

        <!-- Add more orders as needed -->

    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
