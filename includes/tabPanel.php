    <style>
        .tab {
            display: none;
        }
        .tab.active {
            display: block;
        }
        .tab-header {
            cursor: pointer;
            padding: 10px;
            background-color: #000;
            border: 1px solid #ddd;
            border-bottom: none;
            display: inline-block;
        }
    </style>
<?php
// Verifica si se ha enviado un parámetro "tab" a través de la URL
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'tab1';
?>

<div class="tab-header" onclick="showTab('tab1')" style="background-color: <?php echo ($active_tab === 'tab1') ? '#ddd' : '#f1f1f1'; ?>">Tab 1</div>
<div class="tab-header" onclick="showTab('tab2')" style="background-color: <?php echo ($active_tab === 'tab2') ? '#ddd' : '#f1f1f1'; ?>">Tab 2</div>

<div id="tab1" class="tab <?php echo ($active_tab === 'tab1') ? 'active' : ''; ?>">
<div class="tab__panel" value="<?php echo $value; ?>" index="0">
      <?php  get_template_part('includes\MoviesRows');?>
</div>
</div>

<div id="tab2" class="tab <?php echo ($active_tab === 'tab2') ? 'active' : ''; ?>">
<div class="tab__panel" value="<?php echo $value; ?>" index="2">
    <div class="tab__container">
        <div class="tab__mainColumn">
            <h2 class="tab__title">Mulan</h2>
            <p class="tab__description">
                When the Emperor of China issues a decree that one man per family must serve in the Imperial Chinese Army to defend the country from Huns, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. She is spirited, determined and quick on her feet. Disguised as a man by the name of Hua Jun, she is tested every step of the way and must harness her innermost strength and embrace her true potential.
            </p>
        </div>
        <div class="tab__itemsColumn">
            <div class="tab_itemSubColumn">
                <div class="tab__item">
                    <h3 class="tab__subtitle">Duration:</h3>
                    <p>120 minutes</p>
                </div>
                <div class="tab__item">
                    <h3 class="tab__subtitle">Release Date:</h3>
                    <p>2020-09-04</p>
                </div>
            </div>
            <div class="tab__itemSubColumn">
                <div class="tab__item">
                    <h3 class="tab__subtitle">Genres:</h3> 
                    <p>Drama</p>
                    <p>Acción</p>
                    <p>Aventura</p>
                    <p>Fantasía</p>        
                </div>
                <div class="tab__item">
                    <h3 class="tab__subtitle">Cast:</h3>
                    <ul>
                        <li>Gon lu</li>
                        <li>Dani Jen</li>
                        <li>Jet Lee</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function showTab(tabId) {
        // Oculta todos los tabs
        var tabs = document.querySelectorAll('.tab');
        tabs.forEach(function(tab) {
            tab.classList.remove('active');
        });

        // Muestra el tab seleccionado
        var selectedTab = document.getElementById(tabId);
        selectedTab.classList.add('active');
    }
</script>