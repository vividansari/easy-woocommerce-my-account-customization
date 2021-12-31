<?php
/**
 * File for amdin side settings.
 *
 * @package ewcmc
 */
wp_enqueue_script( 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js' );
wp_enqueue_style( 'ewcmc-admin-css' );
wp_enqueue_script( 'ewcmc-admin-js' );
?>
<script src="jquery.ui.touch-punch.js"></script>


<div class="ewmac-page-wrapper">
    <div class="ewmac-wrap">
        <div class="ewmac-header">
            <div class="ewmac-titlediv">
                <h1>Easy WooCommerce My Account Customize</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <div class="ewmac-addrow-div">
                <a class="ewmac-save-btn" href="#">+ Add Row</a>
            </div>
        </div>			
        <form>
            <div id="sortable">
                <div class="ewmac-accordion-div">
                    <div class="ewmac-eye" title="View">
                        <div></div>
                        <div></div>
                    </div>
                    <a href="javascript:void(0);" class="ui-state-default">
                        <span>Dashboard</span>
                        <div class="ewmac-accordion-sign closed">
                        <div class="ewmac-horizontal"></div>
                        <div class="ewmac-vertical"></div>
                        </div>							  
                    </a>
                    <div class="ewmac-content">
                        <div class="ewmac-fgroup">
                            <label>Endpoint label</label>
                            <input type="text" name="" class="ewmac-inputfild" />
                            <span class="ewmac-imp-txt">Enter a name to identify this endpoint</span>
                        </div>
                        <div class="ewmac-fgroup">
                            <label>Endpoint slug</label>
                            <input type="text" name="" class="ewmac-inputfild" />
                            <span class="ewmac-imp-txt">Enter a slug for this endpoint</span>
                        </div>
                        <button class="ewmac-save-btn">Save</button>
                    </div>
                </div>
                <div class="ewmac-accordion-div">
                    <div class="ewmac-eye" title="View">
                        <div></div>
                        <div></div>
                    </div>
                    <a href="javascript:void(0);" class="ui-state-default">
                        <span>order</span>
                        <div class="ewmac-accordion-sign closed">
                        <div class="ewmac-horizontal"></div>
                        <div class="ewmac-vertical"></div>
                        </div>							  
                    </a>
                    <div class="ewmac-content">
                        <div class="ewmac-fgroup">
                            <label>Endpoint label</label>
                            <input type="text" name="" class="ewmac-inputfild" />
                            <span class="ewmac-imp-txt">Enter a name to identify this endpoint</span>
                        </div>
                        <div class="ewmac-fgroup">
                            <label>Endpoint slug</label>
                            <input type="text" name="" class="ewmac-inputfild" />
                            <span class="ewmac-imp-txt">Enter a slug for this endpoint</span>
                        </div>
                        <button class="ewmac-save-btn">Save</button>
                    </div>
                </div>
                <div class="ewmac-accordion-div">
                    <div class="ewmac-eye" title="View">
                        <div></div>
                        <div></div>
                    </div>
                    <a href="javascript:void(0);" class="ui-state-default">
                        <span>orbdddbgder</span>
                        <div class="ewmac-accordion-sign closed">
                        <div class="ewmac-horizontal"></div>
                        <div class="ewmac-vertical"></div>
                        </div>
                        
                    </a>
                    <div class="ewmac-content">
                        <div class="ewmac-fgroup">
                            <label>Endpoint label</label>
                            <input type="text" name="" class="ewmac-inputfild" />
                            <span class="ewmac-imp-txt">Enter a name to identify this endpoint</span>
                        </div>
                        <div class="ewmac-fgroup">
                            <label>Endpoint slug</label>
                            <input type="text" name="" class="ewmac-inputfild" />
                            <span class="ewmac-imp-txt">Enter a slug for this endpoint</span>
                        </div>
                        <button class="ewmac-save-btn">Save</button>
                    </div>
                </div>
            </div>
            <div class="ewmac-formlast-btn">
                <button class="ewmac-save-btn">Save</button>
            </div>
        </form>
    </div>
</div>