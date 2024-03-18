<div x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton){
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton){
            this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent){
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        },
        tabButtonActive(tabContent){
            const tabId = tabContent.id.split('-').slice(-1);
            return this.tabSelected == tabId;
        }
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="w-full h-screen">
    <div class="w-full space-y-3">
        <div class="w-full bg-white p-10 space-y-10">
            <div class="w-full flex justify-between items-center">
                <h3 class="header-text">Members Report</h3>
                <button class="primary-btn-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Zm-6 4q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Z" />
                    </svg>
                    <span>Download Report</span>
                </button>
            </div>
            <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-3/4 h-10 grid-cols-7 p-1 select-none">
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Growth</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Converts</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Deliverance</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" :class="{ 'border-b-4 text-black border-primary' : tabButtonActive($el) }" class="tab-style">Baptism</button>
            </div>

        </div>
        <div class="bg-white w-full p-10">
            <div class="w-full">
                <span>Total|</span>
            </div>
            <canvas id="myChart" style="position: relative; height:70vh; width:70vw"></canvas>
        </div>
    </div>
    <!-- <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My Dataset',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1,
                    }]
                },
                options: {
                    scales: {
                        x: {
                            position: 'bottom' // This will move the x-axis labels to the bottom
                        }
                    }
                }
            });
        });
    </script>
</div>