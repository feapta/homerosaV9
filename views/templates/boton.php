


<div class="switch-button">
    <!-- Checkbox -->
    <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
    <!-- Botón -->
    <label for="switch-label" class="switch-button__label"></label>
</div>

// Boton


:root {
    --color-green: #005ca8;
    --color-red: #fe414a;
    --color-button: #fdffff;
    --color-black: #000;
}
                .switch-button {
                    display: inline-block;
                }
                .switch-button .switch-button__checkbox {
                    display: none;
                }
                .switch-button .switch-button__label {
                    background-color: var(--color-red);
                    width: 4rem;
                    height: 2rem;
                    border-radius: 3rem;
                    display: inline-block;
                    position: relative;
                }
                .switch-button .switch-button__label:before {
                    transition: .2s;
                    display: block;
                    position: absolute;
                    width: 2rem;
                    height: 2rem;
                    background-color: var(--color-button);
                    content: '';
                    border-radius: 50%;
                    box-shadow: inset 0px 0px 0px 1px var(--color-black);
                }
                .switch-button .switch-button__checkbox:checked + .switch-button__label {
                    background-color: var(--color-green);
                }
                .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                    transform: translateX(2rem);
                }
                
                // Fin boton