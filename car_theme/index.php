<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<form method="" class="form bg-gray-200" id="frmBook" >
			<div class="form-group">
				<input type="hidden" id="frmData" value="" />
				<div class="item is-bordertop-orrange">
					<p class="is-text-grey is-text-center">HOME &#x226B; TOYOTA &#x226B; Hatatch &#x226B; Aurius  &#x226B; 2011</p>
				</div>
				<div class="item is-display-flex is-text-center">
					<p class="is-text-grey col-6">Tất cả xe</p>
					<p class="col-6">Xe đã thẩm định</p>
				</div>
				<div class="item col-12 is-display-flex is-pd-20">
					<div class="row">
						<ul class="nav col-12">
							<li class="nav-item">
								<a class="nav-link active" href="#">SH</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">LX</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">SH Mode</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Promavera</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Sprint</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Liberty</a>
							</li>
						</ul>
						<div class="col-6 is-text-center">
							<button class="is-orarange" id="btnBook">Books</button>
						</div>
						<div class="col-6 is-text-center">
							<button class="is-orarange" id="btnReview">Reviews</button>
						</div>
						<div class="dropdown col-12">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Title
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="option">
								<a class="dropdown-item" href="#">Book title</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-primary is-pd-20 is-mg-20" id="btnSubmit">Submit</button>
		</form><!-- .site-main -->
	</div><!-- .content-area -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/car.js" type="text/javascript"></script>