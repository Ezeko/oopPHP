<?php 
require_once ("../Controllers/CalculationController.php");

if (($_SERVER['REQUEST_METHOD']) == 'POST') {
    
    return new CalculationController;
}
?>
<!DOCTYPE html>
<html lang="EN" dir="ltr">

    <head>
        <title>MVC Test Calculator</title>
    </head>

    <body>
        <div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <input class="form-control" type="number" name="num1"
                placeholder="type first number" required>
                <select name="operation" required>
                    <option value=""> Select Option </option>
                    <option value="+"> Add </option>
                    <option value="-"> Minus </option>
                    <option value="/"> Divide </option>
                    <option value="*"> Multiply </option>
                </select>
                <input type="number" name="num2"
                placeholder="type the second number" required>

                <input type="submit" value="Calculate">
            </form>
        </div>

    </body>

</html>