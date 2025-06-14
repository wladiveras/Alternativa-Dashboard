@extends("layouts.app")

@section("style")
<!-- custom CSS -->
@endsection

@section("header")
	@include("layouts.header")
@endsection

@section("wrapper")
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="card card-custom">
				<div class="card-body p-0">
					<!--begin::Invoice-->
					<!--begin::Invoice header-->
					<div class="container">
						<div class="card card-custom card-shadowless">
							<div class="card-body p-0">
								<div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
									<div class="col-md-9">
										<div class="d-flex justify-content-between align-items-center flex-column flex-md-row">
											<div class="d-flex flex-column px-0 order-2 order-md-1 align-items-center align-items-md-start">
												<!--begin::Logo-->
												<a href="#" class="mb-5 max-w-115px">
													<span class="svg-icon svg-icon-full">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/logos/duolingo.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" width="113" height="31" viewBox="0 0 113 31" fill="none">
															<path d="M26.6802 13.33V13.485C26.6802 14.9575 26.6087 15.8875 26.4659 16.275C26.2517 16.895 25.966 17.36 25.4661 17.67C25.0376 17.98 24.5377 18.1358 23.8949 18.1358C23.2529 18.1358 22.7523 17.9808 22.3245 17.67C21.8953 17.3608 21.6103 16.895 21.3954 16.275C21.1811 15.7325 21.1104 14.8025 21.1104 13.4075V5.425H17.3254V13.485C17.3968 15.345 17.5396 16.6625 17.7539 17.515C18.1824 18.9108 18.8965 19.995 19.8963 20.8483C20.8962 21.6233 22.2531 22.0108 23.8242 22.0108C25.324 22.0108 26.538 21.7008 27.5379 21.0025C28.537 20.3058 29.2511 19.375 29.7518 18.0575C30.1088 17.205 30.3231 15.655 30.3231 13.485V5.425H26.6087V13.33H26.6802ZM15.6107 0H11.897V6.2775C11.8256 6.2775 11.7542 6.2 11.6828 6.2C10.4687 5.425 9.11182 5.0375 7.75492 5.0375C5.82669 5.0375 4.1127 5.735 2.61297 7.2075C0.898984 8.9125 0.0419922 11.005 0.0419922 13.485C0.0419922 15.81 0.827568 17.825 2.3273 19.4525C3.82704 21.0808 5.68314 21.9325 7.75492 21.9325C9.18324 21.9325 10.5401 21.545 11.7542 20.8483C12.9683 20.0733 13.8967 19.065 14.6109 17.7483C15.2536 16.5858 15.54 15.345 15.6107 14.0283V13.4858V0ZM10.6823 16.895C9.89668 17.7483 8.96899 18.2125 7.7542 18.2125C6.61155 18.2125 5.61172 17.7475 4.89756 16.895C4.11199 16.0425 3.75491 14.88 3.75491 13.485C3.75491 12.1675 4.11199 11.005 4.89756 10.1525C5.68314 9.3 6.61155 8.835 7.7542 8.835C8.96828 8.835 9.89668 9.3 10.6823 10.1525C11.4685 11.005 11.8256 12.1675 11.8256 13.485C11.8256 14.88 11.4685 16.0425 10.6823 16.895ZM46.2481 9.3C45.534 7.9825 44.6049 6.975 43.3915 6.2C42.1774 5.425 40.8205 5.0375 39.4636 5.0375C37.5354 5.0375 35.8207 5.735 34.3217 7.2075C32.6077 8.9125 31.75 10.9275 31.75 13.485C31.75 15.81 32.5363 17.825 34.0353 19.4525C35.5357 21.0808 37.3918 21.9325 39.4636 21.9325C40.8919 21.9325 42.2481 21.545 43.4629 20.8483C44.677 20.0733 45.6054 19.065 46.3195 17.7483C47.0337 16.4308 47.3908 15.0358 47.3908 13.4858C47.248 12.0125 46.9623 10.6175 46.2481 9.3ZM42.3917 16.895C41.6061 17.7483 40.6777 18.2125 39.4636 18.2125C38.2495 18.2125 37.3211 17.7475 36.607 16.895C35.8214 16.0425 35.4643 14.88 35.4643 13.485C35.4643 12.1675 35.8214 11.005 36.6077 10.1525C37.3933 9.3 38.321 8.835 39.4643 8.835C40.6777 8.835 41.6068 9.3 42.3924 10.1525C43.178 11.005 43.535 12.1675 43.535 13.485C43.5336 14.88 43.1058 16.0425 42.3917 16.895ZM60.2457 21.7H64.0307V6.1225H60.2457V21.7ZM53.8182 17.515C53.3897 17.2058 53.0326 16.74 52.8898 16.12C52.747 15.655 52.6756 14.725 52.6756 13.33V0H48.9619V13.2525C49.0334 15.4225 49.1762 16.895 49.5333 17.825C50.0332 19.065 50.7473 20.0725 51.7472 20.77C52.747 21.4675 53.9618 21.7775 55.4608 21.7775H58.3174V17.98H55.3894C54.7466 17.98 54.246 17.825 53.8182 17.515ZM78.7424 9.145C78.2425 7.905 77.5283 6.8975 76.5278 6.2C75.5287 5.5025 74.3139 5.1925 72.8142 5.1925C71.1716 5.1925 69.8861 5.58 68.8863 6.355C67.8872 7.13 67.173 8.215 66.7438 9.6875C66.5296 10.4625 66.3867 11.8575 66.3153 13.7175V21.7H70.1003V13.95V13.64C70.1003 12.3225 70.1725 11.315 70.386 10.7725C70.6003 10.1525 70.8859 9.765 71.3144 9.3775C71.7429 9.0675 72.2428 8.9125 72.8856 8.9125C73.5276 8.9125 74.0282 9.0675 74.4567 9.3775C74.8852 9.6875 75.2423 10.1525 75.4558 10.7725C75.5987 11.2375 75.6701 12.1675 75.6701 13.5625V21.7H79.3837V14.88V13.64C79.3137 11.5475 79.0995 9.9975 78.7424 9.145ZM62.0311 0.31C60.9598 0.31 60.0314 1.3175 60.0314 2.48C60.0314 3.6425 60.8884 4.65 62.0311 4.65C63.1023 4.65 64.0307 3.72 64.0307 2.48C64.0307 1.24 63.1023 0.31 62.0311 0.31ZM111.951 9.455C111.237 8.1375 110.308 7.13 109.094 6.355C107.88 5.58 106.595 5.27 105.094 5.27C102.952 5.27 101.166 6.1225 99.6666 7.75C98.1661 9.3775 97.3813 11.3925 97.3813 13.7175C97.3813 16.1975 98.2383 18.2892 99.9522 19.995C101.453 21.4675 103.166 22.165 105.094 22.165C106.522 22.165 107.808 21.7775 109.022 21.0025C110.236 20.2275 111.237 19.22 111.879 17.9025C112.593 16.5858 112.95 15.19 112.95 13.7183C113.022 12.1675 112.665 10.7725 111.951 9.455ZM109.236 13.7175C109.236 15.1125 108.879 16.1975 108.094 17.05C107.308 17.9025 106.38 18.3675 105.166 18.3675C104.022 18.3675 103.023 17.9017 102.309 17.05C101.523 16.1975 101.166 15.035 101.166 13.7175C101.166 12.3225 101.523 11.16 102.309 10.3075C103.095 9.455 104.022 8.99 105.166 8.99C106.308 8.99 107.308 9.455 108.094 10.3075C108.879 11.16 109.236 12.3225 109.236 13.7175C109.236 13.64 109.236 13.64 109.236 13.7175ZM96.0965 13.02C96.0244 11.7025 95.6673 10.54 95.0967 9.3775C94.3825 8.06 93.4541 7.0525 92.3122 6.2775C91.0981 5.5025 89.8126 5.1925 88.3843 5.1925C86.2418 5.1925 84.4564 5.9675 82.9559 7.6725C81.4562 9.3 80.7421 11.315 80.7421 13.64C80.7421 16.12 81.599 18.2125 83.2416 19.84C84.7413 21.3125 86.3832 22.0108 88.3121 22.0108C89.669 22.0108 91.026 21.6233 92.24 20.8483C92.3122 20.77 92.3829 20.77 92.4543 20.6933V22.5525C92.4543 23.9483 92.0258 25.0325 91.3116 25.8858C90.526 26.7383 89.5976 27.2025 88.455 27.2025C87.3123 27.2025 86.3839 26.815 85.5983 25.9625L83.1702 28.7525L83.2416 28.83C84.7413 30.3017 86.4553 31 88.3121 31C89.669 31 91.026 30.6125 92.24 29.8375C93.4541 29.0625 94.3825 28.055 95.0967 26.7375C95.8108 25.42 96.0965 24.025 96.0965 22.5525V14.105V13.5625C96.1679 13.4075 96.1679 13.175 96.0965 13.02ZM92.4536 13.5625C92.4536 14.9575 92.0965 16.0425 91.3109 16.895C90.5253 17.7483 89.5969 18.2125 88.4543 18.2125C87.3116 18.2125 86.3832 17.7475 85.5976 16.895C84.812 16.0425 84.455 14.9575 84.455 13.5625C84.455 12.1675 84.812 11.0825 85.5976 10.1525C86.3832 9.3 87.3116 8.835 88.4543 8.835C89.5969 8.835 90.5967 9.3 91.3109 10.1525C92.0258 11.0825 92.4536 12.1675 92.4536 13.5625Z" fill="#1CB0F6" />
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<!--end::Logo-->
												<span class="d-flex flex-column font-size-h5 font-weight-bold text-muted align-items-center align-items-md-start">
													<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
													<span>Mississippi 96522</span>
												</span>
											</div>
											<h1 class="display-3 font-weight-boldest order-1 order-md-2 mb-5 mb-md-0">INVOICE</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Invoice header-->
					<!--begin::Invoice Body-->
					<div class="position-relative">
						<!--begin::Background Rows-->
						<div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/shapes/abstract-7.svg);"></div>
						<div class="bg-white h-65px"></div>
						<div class="bg-light h-65px"></div>
						<div class="bg-white h-65px"></div>
						<div class="bg-light h-65px"></div>
						<!--end::Background Rows-->
						<!--begin:Table-->
						<div class="container position-absolute top-0 left-0 right-0">
							<div class="row justify-content-center">
								<div class="col-md-9">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr class="font-weight-boldest text-white h-65px">
													<td class="align-middle font-size-h4 pl-0 border-0">DESCRIPTION</td>
													<td class="align-middle font-size-h4 text-right border-0">HOURS</td>
													<td class="align-middle font-size-h4 text-right border-0">RATE</td>
													<td class="align-middle font-size-h4 text-right pr-0 border-0">AMOUNT</td>
												</tr>
											</thead>
											<tbody>
												<tr class="font-size-lg font-weight-bolder h-65px">
													<td class="align-middle pl-0 border-0">Creative Design</td>
													<td class="align-middle text-right border-0">80</td>
													<td class="align-middle text-right border-0">$40.00</td>
													<td class="align-middle text-right text-danger font-weight-boldest font-size-h5 pr-0 border-0">$3200.00</td>
												</tr>
												<tr class="font-size-lg font-weight-bolder h-65px">
													<td class="align-middle pl-0 border-0">Logo Design</td>
													<td class="align-middle text-right border-0">120</td>
													<td class="align-middle text-right border-0">$60.00</td>
													<td class="align-middle text-right border-0 text-danger font-weight-boldest font-size-h5 pr-0">$4800.00</td>
												</tr>
												<tr class="font-size-lg font-weight-bolder h-65px">
													<td class="align-middle pl-0 border-0">Front-End Development</td>
													<td class="align-middle text-right border-0">210</td>
													<td class="align-middle text-right border-0">$40.00</td>
													<td class="align-middle text-right border-0 text-danger font-weight-boldest font-size-h5 pr-0">$12600.00</td>
												</tr>
												<tr class="font-size-lg font-weight-bolder h-65px">
													<td class="align-middle pl-0 border-0">Back-End Development</td>
													<td class="align-middle text-right border-0">240</td>
													<td class="align-middle text-right border-0">$45.00</td>
													<td class="align-middle text-right border-0 text-danger font-weight-boldest font-size-h5 pr-0">$13600.00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--end:Table-->
						<!--begin::Total-->
						<div class="container">
							<div class="row justify-content-center pt-25 pb-20">
								<div class="col-md-9">
									<div class="rounded d-flex align-items-center justify-content-between text-white max-w-425px position-relative ml-auto px-7 py-5 bgi-no-repeat bgi-size-cover bgi-position-center" style="background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/shapes/abstract-9.svg);">
										<div class="font-weight-boldest font-size-h5">TOTAL AMOUNT</div>
										<div class="text-right d-flex flex-column">
											<span class="font-weight-boldest font-size-h3 line-height-sm">$20,600.00</span>
											<span class="font-size-sm">Taxes included</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Total-->
					</div>
					<!--end::Invoice Body-->
					<!--begin::Invoice Footer-->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-6">
										<div class="d-flex flex-column flex-md-row">
											<div class="d-flex flex-column">
												<div class="font-weight-bold font-size-h6 mb-3">BANK TRANSFER</div>
												<div class="d-flex justify-content-between font-size-lg mb-3">
													<span class="font-weight-bold mr-15">Account Name:</span>
													<span class="text-right">Barclays UK</span>
												</div>
												<div class="d-flex justify-content-between font-size-lg mb-3">
													<span class="font-weight-bold mr-15">Account Number:</span>
													<span class="text-right">1234567890934</span>
												</div>
												<div class="d-flex justify-content-between font-size-lg">
													<span class="font-weight-bold mr-15">Code:</span>
													<span class="text-right">BARC0032UK</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 mt-7 mt-md-0">
										<!--begin::Invoice To-->
										<div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-right">INVOICE TO.</div>
										<div class="font-size-lg font-weight-bold mb-10 text-right">Iris Watson. 
										<br />Fredrick Nebraska 20620</div>
										<!--end::Invoice To-->
										<!--begin::Invoice No-->
										<div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-right">INVOICE NO.</div>
										<div class="font-size-lg font-weight-bold mb-10 text-right">56758</div>
										<!--end::Invoice No-->
										<!--begin::Invoice Date-->
										<div class="text-dark-50 font-size-lg font-weight-bold mb-3 text-right">DATE</div>
										<div class="font-size-lg font-weight-bold text-right">12 May, 2020</div>
										<!--end::Invoice Date-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Invoice Footer-->
					<!-- begin: Invoice action-->
					<div class="container">
						<div class="row justify-content-center py-8 px-8 py-md-28 px-md-0">
							<div class="col-md-9">
								<div class="d-flex font-size-sm flex-wrap">
									<button type="button" class="btn btn-danger font-weight-bolder py-4 mr-3 mr-sm-14 my-1 px-7" onclick="window.print();">Print Invoice</button>
									<button type="button" class="btn btn-light-danger font-weight-bolder mr-3 my-1 px-7">Download</button>
									<button type="button" class="btn btn-primary font-weight-bolder ml-sm-auto my-1 px-7">Create Invoice</button>
								</div>
							</div>
						</div>
					</div>
					<!-- end: Invoice action-->
					<!--end::Invoice-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
@endsection

@section("script")
<!--Custom Script-->
@endsection