<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@1,500&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">    
    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>RtoV in Surabaya 2033</title>
</head>
<body>
    <div class="signup-container">
    <form method="POST" action="/form" class="p-3" enctype="multipart/form-data">
        @csrf
        <div class="right-container">
            <header>
                <h1>Grab your ticket now!</h1>
                <div class="set">
                    <!-- name -->
                    <div class="name">
                        <label for="name">Name</label>
                        <input id="name" type="text" placeholder="Your name" name="name"/>
                        @error('name')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- email -->
                    <div class="email">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Your email" name="email"/>
                        @error('email')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
    
                <div class="set">
                    <!-- nik -->
                    <div class="nik">
                        <label for="nik">NIK</label>
                        <input id="nik" type="text" placeholder="Your NIK" name="nik"/>
                        @error('nik')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror    
                    </div>   
                    
                    <!-- ace member -->
                    <div class="ace">
                        <label for="ace_yes">ACE Member</label>
                        <div class="radio-container">
                            <input id="ace_yes" name="ace" type="radio" value="yes" checked="" />
                            <label for="ace_yes">Yes</label>
                            <input id="ace_no" name="ace" type="radio" value="no" />
                            <label for="ace_no">No</label>
                        </div>
                    </div>
                </div>
                
                <!-- seat category -->
                <div class="custSeat">
                    <label for="custSeat1">Seat Category</label>
                    <div class="radio-container">
                        <input id="custSeat1" name="custSeat" type="radio" value="1" checked="" />
                        <label for="custSeat1">CAT 1</label>
                        <input id="custSeat2" name="custSeat" type="radio" value="2" />
                        <label for="custSeat2">CAT 2</label>
                        <input id="custSeat3" name="custSeat" type="radio" value="3" />
                        <label for="custSeat3">CAT 3</label>
                        <input id="custSeat4" name="custSeat" type="radio" value="4" />
                        <label for="custSeat-4">CAT 4</label>
                    </div>
                </div>

                    
                <div class="set">
                    <div class="amount">
                        <label for="amount">Amount</label>
                        <input type="text" id="amount" placeholder="Payment amount" name="amount">
                        @error('amount')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    
                
                    <!-- payment date -->
                    <div class="paymentDate">
                        <label for="paymentDate">Payment Date</label>
                        <input id="paymentDate" type="date" placeholder="MM/DD/YYYY" name="paymentDate"/>
                        @error('paymentDate')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- proof image -->
                <div class="image">
                    <label for="image">Payment Proof</label>
                    <form action="/action_page.php">
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </form>
                    @error('image')
                    <div class="alert alert-danger fs-6 text">{{ $message }}/div>
                    @enderror 
                </div>
                
                </header>
            
            <footer>
                <div class="set">
                    <input type="submit" value="Submit">
                </div>
            </footer>
        
    </div>
    </form>
</div>

</body>
</html>
