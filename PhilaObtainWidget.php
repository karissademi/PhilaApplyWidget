<?php
/* Plugin Name: Phila Obtain Widget
Plugin URI: localhost/wordpress
Description: Displays Obtainable Items
Version: 1.0
Author: Karissa Demi
Author URI: localhost/wordpress
*/
add_shortcode('PhilaObtainWidget', 'philaobtain_handler');

function philaobtain_handler(){
$message = <<<EOM
 
<div id="PhilaObtainWidget" class="PhilaWidget">
    <h1 class="PhilaWidgetTitle">Obtain</h1>
        <div id="PhilaObtainLinkBlock">
			<div class="PhilaObtainDropDown">
				<select rows="2" name="PhilaLicenceJumpMenu" id="PhilaLicenceJumpMenu" onchange="javascript:document.location = this.value;" class="pick-me" data-class="licence-drop-down">
					<option value="">Licences</option>
                            <option value="http://www.acctphilly.org/">Animal License</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=Construction&section=Licensing%20%26%20Regulations">Building & Construction</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=All%20Business%20Types&section=Licensing%20%26%20Regulations">Business</option>
                            <option value="http://www.phila.gov/health/permitsForms.html">Health and Food</option>
                            <option value="https://business.phila.gov/Pages/HousingRentalLicense.aspx?stage=Start&type=All%20Business%20Types&section=Licensing%20%26%20Regulations&BSPContentListItem=Housing%20Inspection%20License">Housing Inspection</option>
                            <option value="http://secureprod.phila.gov/wills/marriagelicense.aspx">Marriage License</option>
                            <option value="http://www.philadelphiastreets.com/index.php/complete-streets-handbook">Street Closure</option>
                </select>
                <select rows="2" name="PhilaPermitJumpMenu" id="PhilaPermitJumpMenu" onchange="javascript:document.location = this.value;" class="pick-me" data-class="permit-drop-down">
                        <option value="">Permits</option>
                            <option value="http://www.phila.gov/health/AirManagement/AirPermittingForms.html">Air Pollution</option>
                            <option value="http://www.phila.gov/health/AirManagement/AsbestosControl.html">Asbestos Control</option>
                            <option value="http://www.phila.gov/MDO/SpecialEvents/Pages/PermitsandApplications.aspx">Block Party</option>
                            <option value="https://business.phila.gov/Pages/BuildingPermits.aspx?stage=Start&type=All%20Business%20Types&section=Permits%20%26%20Certificates&BSPContentListItem=Building%20Permits">Building & Construction</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=All%20Business%20Types&section=Permits%20%26%20Certificates">Business</option>
                            <option value="http://www.phillypolice.com/assets/docs/PPD-Form.Firearm-License-Application.pdf">Handgun</option>
                            <option value="http://www.phila.gov/health/permitsForms.html">Health and Food</option>
                            <option value="http://secure.phila.gov/streets/tnp/">Moving Truck Requests</option>
                            <option value="http://www.phila.gov/MDO/SpecialEvents/Pages/default.aspx">Special Events Permits</option>
                            <option value="https://secure.phila.gov/Streets/HaulingPermit/">Special Hauling Permit</option>
                            <option value="http://www.phila.gov/health/permitsForms.html">Tobacco Retailer Permit</option>
                </select>
                <select rows="2" name="PhilaCertificateJumpMenu" id="PhilaCertificateJumpMenu" onchange="javascript:document.location = this.value;" class="pick-me" data-class="certificate-drop-down">
                        <option value="">Certificates</option>
                            <option value="http://www.portal.state.pa.us/portal/server.pt/community/birth_certificates/14121">Birth Certificate</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=All%20Business%20Types&section=Permits%20%26%20Certificates">Business</option>
                            <option value="http://www.portal.state.pa.us/portal/server.pt/community/death_certificates/14122">Death Certificate</option>
                            <option value="http://phila.gov/health/permitsForms.html">Health and Food</option>
                            <option value="https://secure.phila.gov/PSC-Onlinev2/">Property Sales</option>
                            <option value="https://secure.phila.gov/CRS-Onlinev2/">Rental Suitability</option>
				</select>
			</div>
		</div>
        </div>
    
EOM;

return $message;
}

function philaobtainwidget($args, $instance) { // widget sidebar output
  extract($args, EXTR_SKIP);
  echo $before_widget; // pre-widget code from theme
  echo philaobtain_handler();
  echo $after_widget; // post-widget code from theme
}
?>
