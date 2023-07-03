<div class="container1">
  <div class="innercontainer1">
    <p class = 'text1' >Call any function.</p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="ui form">
      <div class="input-container">
        <input placeholder="Function" class="input-field" type="text" maxlength="20">
        <label for="input-field" class="input-label">Enter Function</label>
        <span class="input-highlight"></span>
      </div>
      <div class="input-container">
        <button>Submit</button>
      </div>
    </form>
  </div>
</div>
