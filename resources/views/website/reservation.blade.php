<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>حجز الشاليه</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        .reserved {
            background-color: #ffdddd;
            pointer-events: none;
        }
        .alert-success {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            display: flex;
            align-items: center;
        }
        .alert-success .check-icon {
            margin-right: 10px;
            font-size: 24px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">احجز الشاليه</div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('reservation_store') }}">
                            @csrf
                            <input type="hidden" name="chalet_id" value="{{ $chalet->id }}">
                            <div class="form-group">
                                <label for="from">من تاريخ</label>
                                <input type="text" id="from" name="from" class="form-control datepicker" required>
                            </div>
                            <div class="form-group">
                                <label for="to">إلى تاريخ</label>
                                <input type="text" id="to" name="to" class="form-control datepicker" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">احجز الآن</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            <span class="check-icon">✔️</span>
            <strong>{{ session('success') }}</strong>
        </div>
        <script>
            setTimeout(function() {
                $('.alert-success').fadeOut('slow');
            }, 3000);
        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            var reservedRanges = @json($reservedRanges);

            function disableReservedDates(date) {
                var formattedDate = $.fn.datepicker.DPGlobal.formatDate(date, 'yyyy-mm-dd', 'en');
                return reservedRanges.includes(formattedDate) ? { classes: 'reserved', tooltip: 'تاريخ محجوز' } : [true];
            }

            $('#from').datepicker({
                format: 'yyyy-mm-dd',
                beforeShowDay: disableReservedDates,
                autoclose: true,
                todayHighlight: true,
                startDate: new Date()
            }).on('changeDate', function(selected) {
                var startDate = new Date(selected.date.valueOf());
                $('#to').datepicker('setStartDate', startDate);
            });

            $('#to').datepicker({
                format: 'yyyy-mm-dd',
                beforeShowDay: disableReservedDates,
                autoclose: true,
                todayHighlight: true,
                startDate: new Date()
            }).on('changeDate', function(selected) {
                var endDate = new Date(selected.date.valueOf());
                $('#from').datepicker('setEndDate', endDate);
            });
        });
    </script>
</body>
</html>
