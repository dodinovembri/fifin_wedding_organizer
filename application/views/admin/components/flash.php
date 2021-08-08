<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success');
        $this->session->unset_userdata('success'); ?>
    </div>
<?php } elseif ($this->session->flashdata('warning')) { ?>
    <div class="alert alert-warning" role="alert">
        <?php echo $this->session->flashdata('warning');
        $this->session->unset_userdata('warning'); ?>
    </div>
<?php } ?>