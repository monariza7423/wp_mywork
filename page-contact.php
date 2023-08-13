<?php get_header(); ?>

<div class="contact wrapper">
  <h1 class="page-title">CONTACT<h1>

  <div class="form">
    <div class="item">
      <label for="name" class="label">NAME</label>
      <input type="text" id="name" class="input" >
    </div>

    <div class="item">
      <label for="email" class="label">E-MAIL</label>
      <input type="text" id="email" class="input" >
    </div>

    <div class="item">
      <label for="message" class="label">MESSAGE</label>
      <input type="textarea" id="message" class="input">
    </div>
  </div>

  <button type="submit">送信</button>
  
</div>

<?php get_footer(); ?>