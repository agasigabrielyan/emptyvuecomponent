BX.ready(function() {
    BX.BitrixVue.createApp({
        data: {
            numbers: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
        },
        computed: {
            evenNumbers() {
                return this.numbers.filter(number => number % 2 === 0)
            }
        },
        template: `
            <ul>
                <li v-for="(n, index) in numbers">
                    {{index}}) <b>{{ n }}</b>
                </li>
            </ul>
        `
    }).mount("#application");
});