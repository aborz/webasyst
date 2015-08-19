<?php

return array(
    'themes' => true,
    'vars' => array(
        'page.html' => array(
            '$page.name' => _w('Page name'),
            '$page.title' => _w('Page title (&lt;title&gt;)'),
            '$page.content' => _w('Page content'),
            '$page.update_datetime' => _w('Page last update datetime'),
        ),
        '$wa' => array(
            '$wa->site->pages()' => _w('Returns the array of pages associated with the current “Site” app settlement. Each page is an array of ( <em>"id", "name", "title", "url", "create_datetime", "update_datetime", "content"[, "custom_1", "custom_2", …]</em> )'),
            //'$wa->site->pages(false)' => _w('Page list (only id, name, title, url, create_datetime, update_datetime)'),
            '$wa->site->page(<em>id</em>)' => _w('Returns page info (array) by <em>id</em> (int)'),
        ),
        'index.html' => array(
            '$content' => _w('Content'),
            '$meta_keywords' => _w('META Keywords'),
            '$meta_description' => _w('META Description'),
        ),
        'error.html' => array(
            '$error_code' => _w('Error code (e.g. 404)'),
            '$error_message' => _w('Error message'),
        )
    ),
    'blocks' => array(
        'send_email_form' => array(
            'description' => _w('Email feedback form'),
            'content' => '
<style>
  .wa-form { float: left; margin: 10px 0; overflow: visible; }
  .wa-form .wa-field { clear: left; margin: 0; padding-top: 3px; }
  .wa-form .wa-field .wa-name { float: left; width: 155px; padding-top: 0.05em; padding-bottom: 10px; font-size: 0.95em; }
  .wa-form .wa-field .wa-value { margin-left: 180px; margin-bottom: 5px; position: relative; }
  .wa-form .wa-field .wa-value.wa-submit { margin-top: 0px; }
  .wa-form .wa-field .wa-value input[type="text"], .wa-form .wa-field .wa-value input[type="email"], .wa-form .wa-field .wa-value input[type="password"] { width: 30%; min-width: 200px; margin: 0; }
  .wa-form .wa-field .wa-value textarea { min-width: 300px; height: 70px; }
  input, textarea { font-size: 1em; color: black; font-family: "Georgia", Times, serif; }
  .wa-form .wa-captcha { padding: 7px 0 10px; }
  .wa-form .wa-captcha p { clear: left; margin: 0; }
  .wa-captcha img { float: left; margin-right: 5px; margin-top: -8px; }
  .wa-captcha .wa-captcha-refresh { color: #AAAAAA; font-size: 0.8em; text-decoration: underline; }
</style>
{$errors = array()}
{if $wa->post("send") and $wa->sendEmail("", $errors)}
<h1>[s`Thank you!`]</h1>
<p>[s`Your message has been sent.`]</p>
{else}
<div class="wa-form">
  <form method="post" action="">
  <div class="wa-field">
    <div class="wa-name">Тема письма:</div>
    <div class="wa-value"><select name="topic">
    	<option value=""></option>
    	<option value="1">Адрес магазина</option>
    	<option value="2">Акции</option>
    	<option value="3">Вакансии</option>
    	<option value="4">Возврат/обмен товара</option>
    	<option value="5">Восстановление клубной карты</option>
    	<option value="6">График работы магазина</option>
    	<option value="7">Доставка заказа</option>
    	<option value="8">Другие вопросы о работе интернет-магазина</option>
    	<option value="9">Наличие товара</option>
    	<option value="10">Отписаться от рассылки</option>
    	<option value="11">Оплата товара</option>
    	<option value="12">Партнерство/франчайзинг</option>
    	<option value="13">Подарочные сертификаты</option>
    	<option value="14">Пожелания</option>
    	<option value="15">Правила программы лояльности</option>
    	<option value="16">Прочее</option>
    	<option value="17">Самовывоз</option>
    	<option value="18">Состоянии бонусного счета</option>
    	<option value="19">Характеристики товара, рекомендации (состав, размеры, посадка и пр.)</option>
    </select></div>
  </div>
  <div class="wa-field hidden">
    <div class="wa-name">[s`Email`]:</div>
    <div class="wa-value">
      <input {if !empty($errors.email)}class="wa-error"{/if} name="email" type="hidden" value="{$wa->user()->get("email", "default")|escape}" >
      {if !empty($errors.email)}<em class="wa-error-msg">{$errors.email}</em>{/if}
    </div>
  </div>
  <div class="wa-field">
    <div class="wa-name">Текст письма:</div>
    <div class="wa-value">
      <input type="hidden" name="subject" value="[s`Website request`]">
      <textarea {if !empty($errors.body)}class="wa-error"{/if} name="body">{$wa->post("body")|escape}</textarea>
      {if !empty($errors.body)}<em class="wa-error-msg">{$errors.body}</em>{/if}
    </div>
  </div>
  <div class="wa-field">
    <div class="wa-value">
        {$wa->captcha(!empty($errors.captcha))}
        {if !empty($errors.captcha)}<em class="wa-error-msg">{$errors.captcha}</em>{/if}
    </div>
  </div>
  <div class="wa-field">
    <div class="wa-value wa-submit">
      {if !empty($errors.all)}<em class="wa-error-msg">{$errors.all}</em><br>{/if}
      <input type="submit" value="[s`Send`]" name="send">
    </div>
  </div>
  {$wa->csrf()}
  </form>
</div>
{/if}')
    )
);