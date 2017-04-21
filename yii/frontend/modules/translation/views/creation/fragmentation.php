<div class="container">
	<div class="section white-section">
		<div class="profile-wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h2>Разбиение на фрагменты</h2>
					<br>

					<ul class="nav nav-tabs">
					  <li><a href="/translation/creation">Категория перевода</a></li>
					  <li><a href="/translation/creation/upload">Загрузка материалов</a></li>
					  <li class="active"><a>Разбиение на фрагменты</a></li>
					</ul>
					<div class="tab-content create-translatioin-tabs">
					  <div class="tab-pane fade active in" id="fragmentation">
						<div class="choose-trans-fragmentation-wrapepr">
							<form action="/translation/creation/fragmentation?uploadedFileName=<?=$model['uploadedFileName']?>&translationBookID=<?=$model['translationBookID']?>" method="POST">
								<input type="hidden" name="_csrf" value="<?=Yii::$app->request->csrfToken?>">	
						  	<label class="icr-label">
								    <span class="icr-item type_radio"></span>
								    <span class="icr-hidden">
								    	<input class="icr-input" type="radio" checked name="fragmentationWay" value="sentences" />
								    </span>
								    <span class="icr-text">Разбиение по предложениям (Автоматически)</span>
								</label>

								<label class="icr-label">
								    <span class="icr-item type_radio"></span>
								    <span class="icr-hidden">
								    	<input class="icr-input" type="radio" name="fragmentationWay" value="paragraphs" />
								    </span>
								    <span class="icr-text">Разбиение по абзацам (Автоматически)  </span>
								</label>

								<label class="icr-label">
								    <span class="icr-item type_radio"></span>
								    <span class="icr-hidden">
								    	<input class="icr-input" type="radio" disabled name="fragmentationWay" value="0" />
								    </span>
								    <span class="icr-text">Произвольное разбиение (Вручную)  </span>
								</label>
									<!-- 
									<div class="form-group ">
										<label class="control-label">Пожалуйста, кликните курсором в необходимом месте текста для создания разбиения:</label>
										<textarea class="form-control fragmentation-textarea" rows="40" id="textArea"> // $model['uploadedFileName'] </textarea>
					                </div>
					                 -->
								    <a class="btn btn-default btn-md" href="/translation/creation/upload?category=book">Назад</a>&nbsp;
	                  <button class="btn btn-success btn-md" type="submit">Далее</button>
							</form>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>