<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-sm desktop-only">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/breadcrumbs.php"); ?>
	</div>
</div>

<div class="gap-lg">
	<div class="container">
		<h1 class="h1">Контакты</h1>
	</div>
</div>

<div class="gap-lg">
	<div class="container">
		<div class="contacts-page">
			<div class="contacts-page__item">
				<div class="contacts-page__title">Звоните</div>
				<div class="contacts-page__main">
					<a href="tel:+71234567890" class="fz-subtitle-2">+7 (123) 456-78-90</a>
				</div>
			</div>
			<div class="contacts-page__item">
				<div class="contacts-page__title">Пишите</div>
				<div class="contacts-page__main">
					<a href="mailto:info@ecloft.ru" class="fz-subtitle-2">info@ecloft.ru</a>
				</div>
			</div>
			<div class="contacts-page__item">
				<div class="contacts-page__main">
					<div class="social">
						<div class="contacts-page__title social__title">Свяжитесь в социальных сетях</div>
						<div class="social__list">
							<a href="javascript:;" class="btn-reset btn">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#soc-tg"></use>
								</svg>
							</a>
							<a href="javascript:;" class="btn-reset btn">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#soc-vk"></use>
								</svg>
							</a>
							<a href="javascript:;" class="btn-reset btn">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#soc-wa"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="contacts-page__item">
				<div class="contacts-page__title">Или приходите в наш офис</div>
				<div class="contacts-page__main">
					<span class="fz-subtitle-2">Москва, 3&#8209;я ул.Строителей, дом.&nbsp;25,&nbsp;офис&nbsp;12</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gap-lg">
	<div class="container">
		<div class="contacts-map">
			<div class="contacts-map-content" data-x="55.923392" data-y="37.154728"></div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>