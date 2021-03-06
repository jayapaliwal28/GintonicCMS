<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th width='5%'>Sr. No.</th>
                        <th width='15%' class="text-center">Plan Id</th>
                        <th width='35%'>Plan Description</th>
                        <th width='20%'>Created</th>
                        <th width='25%' class='text-center'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($subscribePlans)) { ?>
                        <tr>
                            <td colspan='5' class='text-warning'><?php echo __('No subscribes found.') ?></td>
                        </tr>
                        <?php
                    } else {
                        $srNo = 1;
                        foreach ($subscribePlans as $subscribePlan) {
                            ?>
                            <tr>
                                <td><?php echo $srNo++; ?></td>
                                <td class="text-center">
                                    <?php echo $subscribePlan['plan_id']; ?>
                                </td>
                                <td>
                                    <?php echo $subscribePlan['plan_name']; ?>
                                </td>
                                <td><?php echo $subscribePlan['created']; ?></td>
                                <td class="text-center actions">
                                    <?php echo $this->Html->link('Unsubscribe Now', array('plugin' => 'GintonicCMS', 'controller' => 'subscribe_plans', 'action' => 'unsubscribeUser', $subscribePlan['subscribe_id']), array('class' => 'btn btn-warning'), 'Do you want to really unsubscribe this plan?'); ?>
                                    <?php echo $this->Html->link('View Transactions', array('plugin' => 'GintonicCMS', 'controller' => 'subscribe_plans', 'action' => 'myplantransaction', $subscribePlan['plan_id']), array('class' => 'btn btn-info')); ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>