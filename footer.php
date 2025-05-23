<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
</main>

<?php
do_action('blocksy:content:after');
do_action('blocksy:footer:before');

blocksy_output_footer();

do_action('blocksy:footer:after');
?>
</div>

<div class="py-3 md:py-4 ct-container">

	<div class="h-[1px] mb-8 bg-deep-forest w-full"></div>

	<div class="grid lg:grid-cols-[40%_auto] gap-6 max-lg:divide-y lg:divide-x divide-deep-forest">
		<form>
			<div class="max-lg:pb-6 lg:pe-6">
				<div class="flex items-start gap-4 mb-4">
					<div>
						<img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/Group-22448.svg" alt="">
					</div>
					<div>
						<div class="text-2xl font-semibold text-deep-forest mb-2">Sign up to our <br>
							newsletter!</div>
						<div class="text-xs">Get 15% off your first order, bird news and good karma
							treats</div>


					</div>
				</div>
				<div class="flex flex-col gap-2 mb-4">
					<input required class="w-full !p-2 !px-4 !bg-white !rounded-full !text-sm !h-10 !border !border-deep-forest" type="email" placeholder="EMAIL ADDRESS" name="" id="">
					<input class="w-full !p-2 !px-4 !bg-white !rounded-full  !text-sm !h-10 !border !border-deep-forest" type="phone" placeholder="PHONE NUMBER" name="" id="">
				</div>
				<div class="text-xs">
					By clicking Sign Up, you agree to receive marketing text messages from Ziara at the number provided, including messages sent by autodialer. Consent is not a condition of any purchase. Message and data rates may apply. Message frequency varies. Reply HELP for help or STOP to cancel. View our Privacy Policy and Terms of Service.
				</div>
				<div class="mt-4">
					<button class="!px-6 !py-2 !bg-transparent !text-deep-forest cursor-pointer !border !border-deep-forest !rounded-full">Sign Up</button>
				</div>
			</div>
		</form>

		<div>
			<div class="flex gap-10 flex-wrap justify-between">
				<div>
					<div class="lora font-semibold text-lg mb-4">Shop</div>

					<div class="space-y-2">
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Shop All
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Best Sellers
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Traditional Sets
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Accessories
							</a>
						</div>

					</div>
				</div>

				<div>
					<div class="lora font-semibold text-lg mb-4">About Us</div>

					<div class="space-y-2">
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Shop All
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Best Sellers
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Traditional Sets
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Accessories
							</a>
						</div>

					</div>
				</div>

				<div>
					<div class="lora font-semibold text-lg mb-4">Get Help</div>

					<div class="space-y-2">
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								FAQ
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Shipping & Delivery
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Refunds & returns
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Contact
							</a>
						</div>
						<div>
							<a href="#" class="text-sm font-medium !underline !underline-offset-4 !text-deep-forest">
								Store Locator
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="h-[1px] my-4 bg-deep-forest w-full"></div>

			<div>
				<div class="lora font-semibold text-lg mb-4">Follow Us</div>

				<div>
					<div class="flex gap-4 items-center">
						<a href="#">
							<svg class="h-4 w-4" width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.21475 19.5H6.46606V9.65991H9.43604L9.75 6.36942H6.46606C6.46606 6.36942 6.46606 5.13941 6.46606 4.49699C6.46606 3.72137 6.63577 3.41583 7.4504 3.41583C8.10379 3.41583 9.75 3.41583 9.75 3.41583V0C9.75 0 7.3231 0 6.80548 0C3.64033 0 2.21475 1.28485 2.21475 3.75271C2.21475 5.89936 2.21475 6.37726 2.21475 6.37726H0V9.71475H2.21475V19.5Z" fill="#2D2D2D"></path>
							</svg>
						</a>
						<a href="#">
							<svg class="h-4 w-4" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0.25 12.6365C1.8139 13.6589 3.67642 14.25 5.67255 14.25C12.2425 14.25 15.9518 8.61071 15.7318 3.54653C16.4233 3.0433 17.0206 2.40429 17.5 1.6854C16.8634 1.97295 16.1797 2.16465 15.4646 2.25252C16.1954 1.80521 16.7534 1.1023 17.0206 0.263595C16.3369 0.678953 15.5825 0.974494 14.773 1.13425C14.1286 0.431333 13.2091 0 12.1875 0C9.90057 0 8.22666 2.16466 8.73748 4.41718C5.79829 4.26541 3.18917 2.83562 1.44452 0.654983C0.51719 2.26849 0.965139 4.38523 2.53689 5.45558C1.95534 5.4396 1.41309 5.27187 0.933709 5.00827C0.894415 6.6777 2.07323 8.23529 3.77073 8.57876C3.27562 8.71455 2.72551 8.74649 2.1754 8.64265C2.62335 10.0724 3.93575 11.1108 5.48393 11.1428C3.99862 12.333 2.12825 12.8601 0.25 12.6365Z" fill="#2D2D2D"></path>
							</svg>
						</a>
						<a href="#">
							<svg class="h-4 w-4" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.53881 11.2775C2.79224 11.3811 3.02191 11.2854 3.09319 10.9985C3.14071 10.7993 3.26742 10.3051 3.32286 10.0979C3.39414 9.81896 3.37038 9.71535 3.16447 9.47625C2.71304 8.94227 2.42793 8.25685 2.42793 7.27655C2.42793 4.44722 4.53458 1.91278 7.90839 1.91278C10.8941 1.91278 12.5414 3.75384 12.5414 6.20858C12.5414 9.4364 11.1238 12.1621 9.00924 12.1621C7.84504 12.1621 6.97386 11.1898 7.25106 10.0023C7.58369 8.58362 8.2331 7.05339 8.2331 6.02527C8.2331 5.10873 7.74208 4.34362 6.72835 4.34362C5.54039 4.34362 4.5821 5.57895 4.5821 7.24467C4.5821 8.30467 4.93849 9.01399 4.93849 9.01399C4.93849 9.01399 3.71885 14.2104 3.50502 15.119C3.07735 16.9281 3.44166 19.1517 3.47334 19.3749C3.48918 19.5104 3.66341 19.5423 3.73469 19.4387C3.84557 19.2952 5.2632 17.5338 5.7463 15.7725C5.88094 15.2784 6.53036 12.6961 6.53036 12.6961C6.91843 13.4373 8.05095 14.0908 9.24683 14.0908C12.8266 14.0908 15.25 10.8072 15.25 6.4158C15.25 3.09233 12.4543 0 8.20143 0C2.91104 0 0.25 3.8176 0.25 6.9976C0.25792 8.92633 0.978617 10.6399 2.53881 11.2775Z" fill="#2D2D2D"></path>
							</svg>
						</a>
						<a href="#">
							<svg class="h-4 w-4" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.17307 1.60441C11.5599 1.60441 11.8365 1.61231 12.7771 1.65973C13.6465 1.69925 14.1207 1.84151 14.4368 1.96797C14.8557 2.12604 15.1481 2.32363 15.4643 2.63187C15.7804 2.94801 15.9701 3.24043 16.1282 3.65932C16.2467 3.97546 16.3969 4.44967 16.4364 5.31906C16.4759 6.25958 16.4917 6.5441 16.4917 8.92306C16.4917 11.3099 16.4838 11.5865 16.4364 12.5271C16.3969 13.3964 16.2546 13.8707 16.1282 14.1868C15.9701 14.6057 15.7725 14.8981 15.4643 15.2143C15.1481 15.5304 14.8557 15.7201 14.4368 15.8782C14.1207 15.9967 13.6465 16.1469 12.7771 16.1864C11.8365 16.2259 11.552 16.2417 9.17307 16.2417C6.7862 16.2417 6.50958 16.2338 5.56906 16.1864C4.69968 16.1469 4.22547 16.0046 3.90933 15.8782C3.49044 15.7201 3.19801 15.5225 2.88187 15.2143C2.56573 14.8981 2.37604 14.6057 2.21797 14.1868C2.09942 13.8707 1.94926 13.3964 1.90974 12.5271C1.87022 11.5865 1.85441 11.302 1.85441 8.92306C1.85441 6.5362 1.86232 6.25958 1.90974 5.31906C1.94926 4.44967 2.09152 3.97546 2.21797 3.65932C2.37604 3.24043 2.57363 2.94801 2.88187 2.63187C3.19801 2.31573 3.49044 2.12604 3.90933 1.96797C4.22547 1.84941 4.69968 1.69925 5.56906 1.65973C6.50168 1.61231 6.7862 1.60441 9.17307 1.60441ZM9.17307 0C6.74669 0 6.44635 0.00789724 5.49003 0.0553183C4.54161 0.0948359 3.89352 0.252909 3.32447 0.466304C2.73961 0.695506 2.24169 0.995842 1.74376 1.49376C1.24584 1.99168 0.945509 2.48961 0.716307 3.07447C0.495009 3.64352 0.344842 4.2916 0.305324 5.24002C0.257903 6.18844 0.25 6.49668 0.25 8.92306C0.25 11.3494 0.257903 11.6498 0.305324 12.6061C0.344842 13.5545 0.502912 14.2026 0.716307 14.7717C0.945509 15.3565 1.24584 15.8544 1.74376 16.3524C2.24169 16.8503 2.73961 17.1506 3.32447 17.3798C3.89352 17.6011 4.54161 17.7513 5.49003 17.7987C6.43845 17.8382 6.74669 17.854 9.17307 17.854C11.5994 17.854 11.8998 17.8461 12.8561 17.7987C13.8045 17.7592 14.4526 17.6011 15.0217 17.3798C15.6065 17.1506 16.1044 16.8503 16.6024 16.3524C17.1003 15.8544 17.4006 15.3565 17.6298 14.7717C17.8511 14.2026 18.0013 13.5545 18.0487 12.6061C18.0882 11.6577 18.104 11.3494 18.104 8.92306C18.104 6.49668 18.0961 6.19634 18.0487 5.24002C18.0092 4.2916 17.8511 3.64352 17.6298 3.07447C17.4006 2.48961 17.1003 1.99168 16.6024 1.49376C16.1044 0.995842 15.6065 0.695506 15.0217 0.466304C14.4526 0.245006 13.8045 0.0948359 12.8561 0.0553183C11.8998 0.00789724 11.5994 0 9.17307 0Z" fill="#2D2D2D"></path>
								<path d="M9.1729 4.33887C6.64378 4.33887 4.58887 6.39378 4.58887 8.92291C4.58887 11.452 6.64378 13.5069 9.1729 13.5069C11.702 13.5069 13.7569 11.452 13.7569 8.92291C13.7569 6.39378 11.702 4.33887 9.1729 4.33887ZM9.1729 11.9025C7.52897 11.9025 6.20118 10.5668 6.20118 8.93082C6.20118 7.28689 7.53688 5.95909 9.1729 5.95909C10.8168 5.95909 12.1446 7.29479 12.1446 8.93082C12.1446 10.5668 10.8168 11.9025 9.1729 11.9025Z" fill="#2D2D2D"></path>
								<path d="M15.0062 4.15764C15.0062 4.7504 14.5241 5.23252 13.9313 5.23252C13.3386 5.23252 12.8564 4.7504 12.8564 4.15764C12.8564 3.56488 13.3386 3.08276 13.9313 3.08276C14.532 3.09067 15.0062 3.56488 15.0062 4.15764Z" fill="#2D2D2D"></path>
							</svg>
						</a>
						<a href="#">
							<svg class="h-4 w-4" width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.0758 2.22313C19.8402 1.3433 19.1568 0.659874 18.2849 0.424207C16.7061 6.69567e-06 10.375 0 10.375 0C10.375 0 4.04393 6.69567e-06 2.46509 0.424207C1.59319 0.659874 0.909814 1.35116 0.674166 2.22313C0.25 3.80995 0.25 7.12501 0.25 7.12501C0.25 7.12501 0.25 10.4401 0.674166 12.0269C0.909814 12.9067 1.59319 13.5901 2.46509 13.8258C4.04393 14.25 10.375 14.25 10.375 14.25C10.375 14.25 16.7061 14.25 18.2849 13.8258C19.1568 13.5901 19.8402 12.8989 20.0758 12.0269C20.5 10.4401 20.5 7.12501 20.5 7.12501C20.5 7.12501 20.5 3.80995 20.0758 2.22313ZM8.30915 10.1337V4.11632L13.5955 7.12501L8.30915 10.1337Z" fill="#2D2D2D"></path>
							</svg>
						</a>
					</div>
				</div>

				<div class="text-xs flex justify-between gap-4 flex-wrap mt-6">
					<div>© <?php echo date('Y'); ?> Zilara Silver Redefined. All Rights Reserved.</div>


					<div class="flex gap-4">
						<div><a href="#" class="!underline !underline-offset-2">Privacy Policy</a></div>
						<div><a href="#" class="!underline !underline-offset-2">Terms & Conditions</a></div>
					</div>
				</div>
			</div>


		</div>
	</div>





</div>



<?php wp_footer(); ?>

</body>

</html>