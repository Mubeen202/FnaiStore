{use class="Yii"}
<form action="{$app->request->baseUrl}/design/box-save" method="post" id="box-save">
  <input type="hidden" name="id" value="{$id}"/>
  <div class="popup-heading">
    &nbsp;
  </div>
  <div class="popup-content box-img">




    <div class="tabbable tabbable-custom">
      <ul class="nav nav-tabs">

        <li class="active" data-bs-toggle="tab" data-bs-target="#type"><a>{$smarty.const.TEXT_IMAGE_}</a></li>
        <li data-bs-toggle="tab" data-bs-target="#style"><a>{$smarty.const.HEADING_STYLE}</a></li>
        <li data-bs-toggle="tab" data-bs-target="#align"><a>{$smarty.const.HEADING_WIDGET_ALIGN}</a></li>
        <li data-bs-toggle="tab" data-bs-target="#visibility"><a>{$smarty.const.TEXT_VISIBILITY_ON_PAGES}</a></li>

      </ul>
      <div class="tab-content">
        <div class="tab-pane active menu-list" id="type">


          <div class="setting-row">
            <label for="">{$smarty.const.TEXT_HEADING}</label>
            <input type="number" name="setting[0][street_heading]" value="{$settings[0].street_heading}" class="form-control" /><span style="display:inline-block; padding: 0 0 0 10px; font-size: 12px; width: 310px">{$smarty.const.TEXT_HEADING_ABOUT}</span>
          </div>
          <div class="setting-row">
            <label for="">{$smarty.const.TEXT_PITCH}</label>
            <input type="number" name="setting[0][street_pitch]" value="{$settings[0].street_pitch}" class="form-control" /><span style="display:inline-block; padding: 0 0 0 10px; font-size: 12px; width: 310px">{$smarty.const.TEXT_PITCH_ABOUT}</span>
          </div>
          <div class="setting-row">
            <label for="">Another address</label>
            <input type="test" name="setting[0][street_address]" value="{$settings[0].street_address}" class="form-control" style="width: 300px" />
          </div>





        </div>
        <div class="tab-pane" id="style">
          {include 'include/style.tpl'}
        </div>
        <div class="tab-pane" id="align">
          {include 'include/align.tpl'}
        </div>
        <div class="tab-pane" id="visibility">
          {include 'include/visibility.tpl'}
        </div>

      </div>
    </div>


  </div>
  <div class="popup-buttons">
    <button type="submit" class="btn btn-primary btn-save">{$smarty.const.IMAGE_SAVE}</button>
    <span class="btn btn-cancel">{$smarty.const.IMAGE_CANCEL}</span>
  </div>
</form>