<div class="wrap">
    <h1>Theme Options</h1>
    <form action="options.php" method="post" enctype="multipart/form-data">
        <h2>Contact Info</h2>
        <table class="form-table wpex-custom-admin-login-table">
            <?php 
			settings_fields( 'company_data' ); // settings group name
			$company_phone = get_option("eventsbijdaniek_company_phone");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_phone">Telefoonnummer:</label>
                </th>
                <td>
                    <input type="text" value="<?= $company_phone; ?>" name="eventsbijdaniek_company_phone"
                        id="eventsbijdaniek_company_phone">
                </td>
            </tr>
            <?php $company_email = get_option("eventsbijdaniek_company_email");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_email">E-mail adres:</label>
                </th>
                <td>
                    <input type="email" value="<?= $company_email; ?>" name="eventsbijdaniek_company_email"
                        id="eventsbijdaniek_company_email">
                </td>
            </tr>
            <?php $company_bedrijfsgegevens = get_option("eventsbijdaniek_company_bedrijfsgegevens");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_bedrijfsgegevens">Bedrijfsgegevens:</label>
                </th>
                <td>
                    <textarea name="eventsbijdaniek_company_bedrijfsgegevens"
                        id="eventsbijdaniek_company_bedrijfsgegevens"><?= $company_bedrijfsgegevens; ?></textarea>
                </td>
            </tr>
            <?php $company_kantoor = get_option("eventsbijdaniek_company_kantoor");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_kantoor">Kantoor:</label>
                </th>
                <td>
                    <textarea name="eventsbijdaniek_company_kantoor"
                        id="eventsbijdaniek_company_kantoor"><?= $company_kantoor; ?></textarea>
                </td>
            </tr>
            <?php $company_store = get_option("eventsbijdaniek_company_store");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_store">Magazijn en retour pakketten:</label>
                </th>
                <td>
                    <textarea name="eventsbijdaniek_company_store"
                        id="eventsbijdaniek_company_store"><?= $company_store; ?></textarea>
                </td>
            </tr>
            <?php $company_pres = get_option("eventsbijdaniek_company_pres");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_pres">Pres:</label>
                </th>
                <td>
                    <input type="email" value="<?= $company_pres; ?>" name="eventsbijdaniek_company_pres"
                        id="eventsbijdaniek_company_pres">
                </td>
            </tr>
            <?php $company_finance = get_option("eventsbijdaniek_company_finance");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_finance">Financiële zaken:</label>
                </th>
                <td>
                    <input type="email" value="<?= $company_finance; ?>" name="eventsbijdaniek_company_finance"
                        id="eventsbijdaniek_company_finance">
                </td>
            </tr>
            <?php $company_facturen = get_option("eventsbijdaniek_company_facturen");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_company_finance">Facturen:</label>
                </th>
                <td>
                    <input type="email" value="<?= $company_facturen; ?>" name="eventsbijdaniek_company_facturen"
                        id="eventsbijdaniek_company_facturen">
                </td>
            </tr>
        </table>
        <h2>Social Media</h2>
        <table class="form-table wpex-custom-admin-login-table">
            <?php 
			$company_facebook = get_option("eventsbijdaniek_facebook");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_facebook">Facebook URL:</label>
                </th>
                <td>
                    <input type="text" value="<?= $company_facebook; ?>" name="eventsbijdaniek_facebook"
                        id="eventsbijdaniek_facebook">
                </td>
            </tr>
            <?php $company_whatsapp = get_option("eventsbijdaniek_whatsapp");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_whatsapp">Whatsapp URL:</label>
                </th>
                <td>
                    <input type="text" value="<?= $company_whatsapp; ?>" name="eventsbijdaniek_whatsapp"
                        id="eventsbijdaniek_whatsapp">
                </td>
            </tr>
            <?php $company_instagram = get_option("eventsbijdaniek_instagram");?>
            <tr valign="top">
                <th>
                    <label for="eventsbijdaniek_instagram">Instagram URL:</label>
                </th>
                <td>
                    <input type="text" value="<?= $company_instagram; ?>" name="eventsbijdaniek_instagram"
                        id="eventsbijdaniek_instagram">
                </td>
            </tr>
        </table>
        <?php submit_button();?>
    </form>
</div>