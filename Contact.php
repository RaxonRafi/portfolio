<?php
require_once "header.php"
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header bg-primary">
                    <h5 class="card-title text-light">Card title</h5>
                    <p class="card-text text-light">content</p>

                </div>
                <div class="card-body bg-light">
                    <form method="POST" action="contact_post.php">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Enter first name" name="First_name">
                        </div>
                        <div class="form-group">
                            <label>last name</label>
                            <input type="text" class="form-control" placeholder="Enter last name" name="Last_name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="Email_address">
                        </div>
                        <div class="form-group">
                            <label>phone number</label>
                            <input type="text" class="form-control" placeholder="Enter number" name="Phone_Number">
                        </div>

                        <div class="form-group">
                            <label>Messages</label>
                            <textarea class="form-control"  rows="3" placeholder="enter message" name="massage"></textarea>
                          
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "footer.php"
?>