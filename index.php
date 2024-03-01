<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Class-6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <h1 class="mt-1 title mb-5">Simple Calculator</h1>
    <section class="row justify-content-center" >
        <div class="col-4">
            <form action="" method="post" >
                
                <div class="input-group mb-3 ">
                    <label class="input-group-text" for="first_number">1st Number</label>
                    <input type="number" name="first_number" id="first_number" required>
                </div>

                <div class="input-group mb-3 ">
                    <label class="input-group-text" for="second_number">2nd Number</label>
                    <input type="number" name="second_number" id="second_number" required>
                </div>

                <div class="input-group mb-3 ">
                    <label class="input-group-text" for="operation">Symbol</label>
                    <select name="operation" id="operation">
                        <option value="">Select Operation</option>
                        <option value="add">+</option>
                        <option value="sub">-</option>
                        <option value="multi">x</option>
                        <option value="div">÷</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ">Calculation</button>

            </form>
        </div>

        

    </section>
    
    <section>
    <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $num1 = $_POST["first_number"];
                    $num2 = $_POST["second_number"];
                    $operate = $_POST["operation"];

                    if($operate == "add"){
                        $result = $num1 + $num2;
                                          
                    }else if($operate == "sub"){
                        $result = $num1 - $num2;
                        
                    }else if($operate == "multi"){
                        $result = $num1 * $num2;
                        
                    }else if($operate == "div"){
                        $result = $num1 / $num2;
                        
                    }
                }
                
                
            
            ?>
    </section>
    
    <section class="row justify-content-center result-section mt-5">
        <section class=" col-4 input-group ">
            <span class="input-group-text ">Result</span>
            <textarea value = "" class="text-center result-area form-control"> <?php echo $result ?> </textarea>
        </section>
    </section>
    
            




    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>