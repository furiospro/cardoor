<?php if (!defined('FW')) die( 'Forbidden' ); ?>


<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Вставить/изменить ссылку</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="link-options">
					<p class="howto" id="wplink-enter-url">Введите адрес назначения (URL)</p>
					<div class="link-options my-2">
						<span>URL</span>
						<input id="wp-link-url" type="text" aria-describedby="wplink-enter-url">
					</div>
					<div class="wp-link-text-field link-options my-2">
						<span>Текст ссылки</span>
						<input id="wp-link-text" type="text">
					</div>
					<div class="link-target">
						<label>
							<span></span>
							<input type="checkbox" id="wp-link-target"> Открывать в новой вкладке</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
				<button type="button" id="save-edit" class="btn btn-primary">Добавить ссылку</button>
			</div>
		</div>
	</div>
</div>