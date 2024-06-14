import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'
import './bootstrap';
import '../../vendor/masmerise/livewire-toaster/resources/js';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

Alpine.plugin(Clipboard);

Livewire.start();
