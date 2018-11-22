<!-- This file is used to markup the administration form of the widget. -->
  
  <div class="widget-content">
    <p>
        <label for="<?php echo $this->get_field_id( 'monday_friday_hrs' ); ?>">Monday-Friday</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'monday_friday' ); ?>" name="<?php echo $this->get_field_name( 'monday_friday' ); ?>" value="<?php echo esc_attr( $monday_friday ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'saturday_hrs' ); ?>">Saturday</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'saturday' ); ?>" name="<?php echo $this->get_field_name( 'saturday' ); ?>" value="<?php echo esc_attr( $saturday ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'sunday_hrs' ); ?>">Sunday</label>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sunday' ); ?>" name="<?php echo $this->get_field_name( 'sunday' ); ?>" value="<?php echo esc_attr( $sunday ); ?>">
    </p>
</div>
