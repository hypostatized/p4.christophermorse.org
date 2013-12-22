<?php if ($user): ?>
  <? Router::redirect('/content/profile'); ?>
<?php else: ?>
<div id="content_main">
  <div id="zeus">
    <img src="/images/zeus.png" class="titleimg" alt="zeus">
  </div>
  <div id="main">
    <h1>
      New User Sign Up
    </h1>
    <form method="POST" action="/accounts/newuser_go" class="center">
      <span class="form">
        Username: 
      </span>
      <input type="text" name="username">
      <br/>
      <span class="form">
        Password: 
      </span>
      <input type="password" name="password">
      <br/>
      <br/>
      <span class="form">
        Myers-Briggs Type: 
      </span>
      <select name="typology">
        <option>
        </option>
        <option>
          INTJ
        </option>
        <option>
          INFJ
        </option>
        <option>
          ISTJ
        </option>
        <option>
          ISFJ
        </option>
        <option>
          INTP
        </option>
        <option>
          INFP
        </option>
        <option>
          ISTP
        </option>
        <option>
          ISFP
        </option>
        <option>
          ENTP
        </option>
        <option>
          ENFP
        </option>
        <option>
          ESTP
        </option>
        <option>
          ESFP
        </option>
        <option>
          ENTJ
        </option>
        <option>
          ENFJ
        </option>
        <option>
          ESTJ
        </option>
        <option>
          ESFJ
        </option>
      </select>
      <br/>
      <br/>
      <input type="submit" value="Create Account">
    </form>
    <?php if(isset($error)) echo "<p class='error'>Error. Please fill out all fields, and your password must be longer than 3 characters.</p>" ?>
    <br/>
    <br/>
  </div>
  <div id="hera">
    <img src="/images/hera.png" class="titleimg" alt="hera">
  </div>
</div>
<?php endif?>