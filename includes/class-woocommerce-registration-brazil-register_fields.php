<?php

/**
 * @link       jonathaferreira.dev
 * @since      1.0.0
 *
 * @package    Woocommerce_Registration_Brazil
 * @subpackage Woocommerce_Registration_Brazil/includes
 */

/**
 * Registra os campos no formulario de cadastro do WooCommerce
 *
 * @package    Woocommerce_Registration_Brazil
 * @subpackage Woocommerce_Registration_Brazil/includes
 * @author     Jonatha Ferreira <contato@jonathaferreira.dev>
 */
class Register_fields
{
    public function extra_register_fields() {
      ?>

    

      <p class="form-row form-row-first">

      <label for="billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><abbr class="required" title="obrigatório"> *</abbr></label>

      <input type="text" class="input-text" name="billing_first_name" id="billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />

      </p>



      <p class="form-row form-row-last">

      <label for="billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?>&nbsp;<abbr class="required" title="obrigatório">*</abbr></label>

      <input type="text" class="input-text" name="billing_last_name" id="billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />

      </p>



      <div class="clear"></div>

  <p class="form-row form-row-wide">
    <label for="billing_persontype" class="">Tipo de Pessoa&nbsp;<abbr class="required" title="obrigatório">*</abbr></label>
    <select name="billing_persontype" id="billing_persontype" class="select">
    <option value="1" selected="selected">Pessoa Física</option>
    <option value="2">Pessoa Jurídica</option>
    </select>
  </p>

  <p class="form-row form-row-wide person-type-field validate-required" id="billing_cpf_field">
    <label for="billing_cpf" class="">CPF&nbsp;<abbr class="required" title="obrigatório">*</abbr></label><span class="woocommerce-input-wrapper">
    <input type="tel" class="input-text " name="billing_cpf" id="billing_cpf" placeholder="" value="<?php if ( ! empty( $_POST['billing_cpf'] ) ) esc_attr_e( $_POST['billing_cpf'] ); ?>" maxlength="14"></span>
  </p>

  <p class="form-row form-row-wide" id="billing_company_field" data-priority="25">
    <label for="billing_company" class="">Razão Social&nbsp;<abbr class="required" title="obrigatório">*</abbr></label>
    <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="<?php if ( ! empty( $_POST['billing_company'] ) ) esc_attr_e( $_POST['billing_company'] ); ?>" autocomplete="organization"></span>
  </p>

  <p class="form-row form-row-first person-type-field validate-required" id="billing_cnpj_field" data-priority="26">
    <label for="billing_cnpj" class="">CNPJ&nbsp;<abbr class="required" title="obrigatório">*</abbr></label>
    <span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_cnpj" id="billing_cnpj" placeholder="" value="<?php if ( ! empty( $_POST['billing_cnpj'] ) ) esc_attr_e( $_POST['billing_cnpj'] ); ?>" maxlength="18"></span>
  </p>

  <p class="form-row form-row-last person-type-field validate-required" id="billing_ie_field" data-priority="27"><label for="billing_ie" class="">Inscrição Estadual&nbsp;
  </label>
  <span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_ie" id="billing_ie" placeholder="" value="<?php if ( ! empty( $_POST['billing_ie'] ) ) esc_attr_e( $_POST['billing_ie'] ); ?>">
  </span>
  </p>

  <p class="form-row form-row-first validate-required" id="billing_birthdate_field" data-priority="31">
    <label for="billing_birthdate" class="">Data de Nascimento&nbsp;<abbr class="required" title="obrigatório">*</abbr></label>
    <span class="woocommerce-input-wrapper"><input type="tel" class="input-text  validate[required]" name="billing_birthdate" id="billing_birthdate" placeholder="" value="<?php if ( ! empty( $_POST['billing_birthdate'] ) ) esc_attr_e( $_POST['billing_birthdate'] ); ?>" maxlength="10">
    </span>
  </p>

  <p class="form-row form-row-last validate-required" id="billing_sex_field" data-priority="32">
  <label for="billing_sex" class="">Sexo&nbsp;<abbr class="required" title="obrigatório">*</abbr></label><span class="woocommerce-input-wrapper">
  <select name="billing_sex" id="billing_sex" class="select wc-ecfb-select validate[required]" data-allow_clear="true" data-placeholder="Selecionar" tabindex="-1" aria-hidden="true">
    <option value="">Selecionar</option>
    <option value="Feminino">Feminino</option>
    <option value="Masculino">Masculino</option>
  </select>
  </span>
  </p>

  <p class="form-row form-row-first">

  <label for="billing_phone">Celular<span class="required"> *</span></label>

  <input type="text" class="input-text" name="billing_phone" id="billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" />

  </p>

      <p class="form-row form-row-last">

      <label for="billing_cellphone"><?php _e( 'Phone', 'woocommerce' ); ?></label>

      <input type="text" class="input-text" name="billing_cellphone" id="billing_cellphone" value="<?php if ( ! empty( $_POST['billing_cellphone'] ) ) esc_attr_e( $_POST['billing_cellphone'] ); ?>" />

      </p>

  



      <?php

  }
}