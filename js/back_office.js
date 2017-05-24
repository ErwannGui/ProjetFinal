/* --- Script header --- */
$('.btn_back_menu').click(function(){ // au click sur la div .btn_header_menu
	$('.btn_header_back').removeClass('actif'); // toutes les div ayant pour class btn_header_back perdent leur class actif, si elles l'ont, ...
	$(this).addClass('actif'); // ... qui est ajouté sur la div prise en parametre du click
	$('.back_content').removeClass('active'); // toutes les div bac_contant perdent la class active
	$('.back_menu').addClass('active'); // back_menu la gagne
});
// le reste des paragraphes est identique ! seuls les class changent
$('.btn_back_article').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_article').addClass('active');
});
$('.btn_back_partenaire').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_partenaire').addClass('active');
});
$('.btn_back_equipe').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_equipe').addClass('active');
});
$('.btn_back_evenement').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_evenement').addClass('active');
});
$('.btn_back_autre').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_autre').addClass('active');
});
$('.btn_back_contact').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_contact').addClass('active');
});
$('.btn_back_reseau').click(function(){
	$('.btn_header_back').removeClass('actif');
	$(this).addClass('actif');
	$('.back_content').removeClass('active');
	$('.back_reseau').addClass('active');
});
/* --- Script Contact --- */
$('.contactMessage').click(function(){ // au click sur a div contactMessage
	$(this).toggleClass('visibleBody'); // on ajoute/enlève la class en fonction de si il l'a déjà ou non
});