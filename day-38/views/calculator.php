<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body body">
                    <h1 class="mb-3 mx-auto title">My Calculator</h1>
                    <hr/>
                    <form action="action.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3 name">First Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="first_number"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 name">Second Number</label>
                            <div class="col-md-9 name">
                                <input type="number" class="form-control" name="second_number"/>
                            </div>
                        </div>
                        <div class="row mb-3 name">
                            <label class="col-md-3 name">Your Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="choice" checked value="+"/> + </label>
                                <label><input type="radio" name="choice" value="-"/> - </label>
                                <label><input type="radio" name="choice" value="*"/> * </label>
                                <label><input type="radio" name="choice" value="/"/> / </label>
                                <label><input type="radio" name="choice" value="%"/> % </label>
                            </div>
                        </div>
                        <div class="row mb-3 name">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="<?php echo isset($_GET['result']) ? $_GET['result'] : '' ?>" name=""/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="calculator_btn" class="btn btn-success" value="Submit"/>
                                <input type="reset" class="btn btn-success" value="Reset"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
