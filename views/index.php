<link rel="stylesheet" href="../css/style.css">
<header>
  <form class="" action="../calculator/index" method="post">
    <div class="otvet">
      <span>Ответ: <?php echo $arg?></span><br>
    </div>
    <input type="text" name="value1" placeholder="Число 1">
    <select class="" name="operation">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>
      <option value="*">*</option>
      <option value="%">%</option>
    </select>
    <input type="text" name="value2" placeholder="Число 2"><br>
    <input type="submit" name="submit" value="Решить">
    <footer>
      <div class="author">
        <span>&copy; 2019 - PHP ООП Calculator Author: Brain</span>
      </div>
    </footer>
  </form>
</header>
