<?php $this->load->view('technician/fragments/header'); ?>
<!-- begin::main-content -->
<div class="main-content">

	<div class="container">

		<!-- begin::page-header -->
		<div class="page-header">
			<h4>Advanced Forms</h4>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Forms</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Advanced Forms</li>
				</ol>
			</nav>
		</div>
		<!-- end::page-header -->

		<div class="row">
			<div class="col-md-12">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">Select2</h6>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<select class="js-example-basic-single">
										<option>Select</option>
										<option value="France">France</option>
										<option value="Brazil">Brazil</option>
										<option value="Yemen">Yemen</option>
										<option value="United States">United States</option>
										<option value="China">China</option>
										<option value="Argentina">Argentina</option>
										<option value="Bulgaria">Bulgaria</option>
									</select>
								</div>
							</div>
						</div>
						<div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Style --&gt;
&lt;link rel="stylesheet" href="vendors/select2/css/select2.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="vendors/select2/js/select2.min.js"&gt;&lt;/script&gt;</code></pre>
						</div>
						<div data-label="HTML" class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="select2-example"&gt;
  &lt;option&gt;Select&lt;/option&gt;
  &lt;option value="France"&gt;France&lt;/option&gt;
  &lt;option value="Brazil"&gt;Brazil&lt;/option&gt;
  &lt;option value="Yemen"&gt;Yemen&lt;/option&gt;
  &lt;option value="United States"&gt;United States&lt;/option&gt;
  &lt;option value="China"&gt;China&lt;/option&gt;
  &lt;option value="Argentina"&gt;Argentina&lt;/option&gt;
  &lt;option value="Bulgaria"&gt;Bulgaria&lt;/option&gt;
&lt;/select&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$('.select2-example').select2({
    placeholder: 'Select'
});</code></pre>
						</div>
						<p>Multiple use</p>
						<div class="form-group">
							<select class="js-example-basic-single" multiple>
								<option>Select</option>
								<option value="France">France</option>
								<option selected value="Brazil">Brazil</option>
								<option selected value="Yemen">Yemen</option>
								<option selected value="United States">United States</option>
								<option value="China">China</option>
								<option value="Argentina">Argentina</option>
								<option value="Bulgaria">Bulgaria</option>
							</select>
						</div>
						<div data-label="HTML" class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="select2-example" multiple&gt;
  &lt;option&gt;Select&lt;/option&gt;
  &lt;option value="France"&gt;France&lt;/option&gt;
  &lt;option value="Brazil"&gt;Brazil&lt;/option&gt;
  &lt;option value="Yemen"&gt;Yemen&lt;/option&gt;
  &lt;option value="United States"&gt;United States&lt;/option&gt;
  &lt;option value="China"&gt;China&lt;/option&gt;
  &lt;option value="Argentina"&gt;Argentina&lt;/option&gt;
  &lt;option value="Bulgaria"&gt;Bulgaria&lt;/option&gt;
&lt;/select&gt;</code></pre>
						</div>
						<p>Multiple and categorized use</p>
						<select class="js-example-basic-single" multiple>
							<option>Select</option>
							<optgroup label="Cities">
								<option value="Wonosari">Wonosari</option>
								<option value="Antipolo">Antipolo</option>
								<option value="Lesuhe">Lesuhe</option>
								<option selected value="Sunzhuang">Sunzhuang</option>
								<option value="Hongchuan">Hongchuan</option>
							</optgroup>
							<optgroup label="Countries">
								<option value="France">France</option>
								<option selected value="Brazil">Brazil</option>
								<option selected value="Yemen">Yemen</option>
								<option selected value="United States">United States</option>
								<option value="China">China</option>
								<option value="Argentina">Argentina</option>
								<option value="Bulgaria">Bulgaria</option>
							</optgroup>
						</select>
						<div data-label="HTML" class="demo-code-preview">
                                <pre><code class="language-html">&lt;select class="select2-example"&gt;
  &lt;option&gt;Select&lt;/option&gt;
  &lt;optgroup label="Cities"&gt;
    &lt;option value="Wonosari"&gt;Wonosari&lt;/option&gt;
    &lt;option value="Antipolo"&gt;Antipolo&lt;/option&gt;
    &lt;option value="Lesuhe"&gt;Lesuhe&lt;/option&gt;
    &lt;option selected value="Sunzhuang"&gt;Sunzhuang&lt;/option&gt;
    &lt;option value="Hongchuan"&gt;Hongchuan&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label="Countries"&gt;
    &lt;option value="France"&gt;France&lt;/option&gt;
    &lt;option selected value="Brazil"&gt;Brazil&lt;/option&gt;
    &lt;option selected value="Yemen"&gt;Yemen&lt;/option&gt;
    &lt;option selected value="United States"&gt;United States&lt;/option&gt;
    &lt;option value="China"&gt;China&lt;/option&gt;
    &lt;option value="Argentina"&gt;Argentina&lt;/option&gt;
    &lt;option value="Bulgaria"&gt;Bulgaria&lt;/option&gt;
  &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">Range Slider</h6>
						<p>Set min value, max value and start point</p>
						<div class="form-group">
							<input type="text" id="demo_1">
						</div>
						<div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Style --&gt;
&lt;link rel="stylesheet" href="vendors/range-slider/css/ion.rangeSlider.min.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="vendors/range-slider/js/ion.rangeSlider.min.js"&gt;&lt;/script&gt;</code></pre>
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code
									class="language-html">&lt;input type="text" id="rangeSlider-example"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    min: 100,
    max: 1000,
    from: 550,
    skin: "round"
});</code></pre>
						</div>
						<p>Set type to double, specify range, show grid and add a prefix "$"</p>
						<div class="form-group">
							<input type="text" id="demo_2">
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "$",
    skin: "round"
});</code></pre>
						</div>
						<p>Add a step to previous config</p>
						<div class="form-group">
							<input type="text" id="demo_3">
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    type: "double",
    grid: true,
    min: -1000,
    max: 1000,
    from: -500,
    to: 500,
    step: 250,
    skin: "round"
});</code></pre>
						</div>
						<p>Force fractional values, using fractional step 0.1</p>
						<div class="form-group">
							<input type="text" id="demo_4">
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    type: "double",
    grid: true,
    min: -12.8,
    max: 12.8,
    from: -3.2,
    to: 3.2,
    step: 0.1,
    skin: "round"
});</code></pre>
						</div>
						<p>Values array could be anything, even strings</p>
						<div class="form-group">
							<input type="text" id="demo_5">
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    grid: true,
    from: new Date().getMonth(),
    values: [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ],
    skin: "round"
});</code></pre>
						</div>
						<h4>Advanced demo</h4>
						<p>Taşınmayı önlemek için kilitleme kolları</p>
						<div class="form-group">
							<input type="text" id="demo_6">
						</div>
						<div data-label="JS" class="demo-code-preview">
                                <pre><code class="language-js">$("#rangeSlider-example").ionRangeSlider({
    min: 0,
    max: 10000,
    from: 777,
    step: 1, // default 1 (set step)
    grid: true, // default false (enable grid)
    grid_num: 4, // default 4 (set number of grid cells)
    grid_snap: false, // default false (snap grid to step)
    skin: "round"
});</code></pre>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">Tags Input</h6>
						<input type="text" class="form-control tagsinput" placeholder="Tags"
							   value="HTML5, CSS3, JavaScript, Laravel">
						<div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Style --&gt;
&lt;link rel="stylesheet" href="vendors/tagsinput/bootstrap-tagsinput.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="vendors/tagsinput/bootstrap-tagsinput.js"&gt;&lt;/script&gt;</code></pre>
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code class="language-html">&lt;input type="text" class="form-control tagsinput-example" placeholder="Tags" value="HTML5, CSS3, JavaScript, Laravel"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
							<pre><code class="language-js">$("input.tagsinput-example").tagsinput('items');</code></pre>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">Input Mask</h6>
						<div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Javascript --&gt;
&lt;script src="vendors/input-mask/jquery.mask.js"&gt;&lt;/script&gt;</code></pre>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" data-input-mask="phone" class="form-control"
								   placeholder="(555) 555-5555">
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code class="language-html">&lt;input type="text" data-input-mask="phone" class="form-control" placeholder="(555) 555-5555"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
							<pre><code class="language-js">$('[data-input-mask="phone"]').mask('(000) 000-0000');</code></pre>
						</div>
						<div class="form-group">
							<label>Date</label>
							<input type="text" data-input-mask="date" class="form-control" placeholder="2019/12/05">
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code class="language-html">&lt;input type="text" data-input-mask="date" class="form-control" placeholder="2019/12/05"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
							<pre><code
									class="language-js">$('[data-input-mask="date"]').mask('0000/00/00/');</code></pre>
						</div>
						<div class="form-group">
							<label>Time</label>
							<input type="text" data-input-mask="time" class="form-control" placeholder="12:25:45">
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code class="language-html">&lt;input type="text" data-input-mask="time" class="form-control" placeholder="00:00:00"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
							<pre><code class="language-js">$('[data-input-mask="time"]').mask('00:00:00');</code></pre>
						</div>
						<div class="form-group">
							<label>Money</label>
							<input type="text" data-input-mask="money" class="form-control" placeholder="54,28">
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code class="language-html">&lt;input type="text" data-input-mask="money" class="form-control" placeholder="54,28"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
							<pre><code class="language-js">$('[data-input-mask="money"]').mask('#.##0,00', {reverse: true});</code></pre>
						</div>
						<div class="form-group">
							<label>Ip Address</label>
							<input type="text" data-input-mask="ip_address" class="form-control"
								   placeholder="192.168.544.444">
						</div>
						<div data-label="HTML" class="demo-code-preview">
							<pre><code class="language-html">&lt;input type="text" data-input-mask="ip_address" class="form-control" placeholder="192.168.544.444"&gt;</code></pre>
						</div>
						<div data-label="JS" class="demo-code-preview">
							<pre><code
									class="language-js">$('[data-input-mask="ip_address"]').mask('099.099.099.099');</code></pre>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>
<!-- end::main-content -->

<!-- js function for the table -->
<script>
	$(document).ready(function () {
		$('#myTable').DataTable();
	});
</script>

<?php $this->load->view('technician/fragments/footer'); ?>
