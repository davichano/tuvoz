let vueIndex = {
    data() {
        return {
            url: $('#baseUrl').val() + "vote",
            week: {},
            vote: {},
            round: {},
            count: []
        }
    },
    methods: {
        switchResponseServer: function (switchAction, response) {
            let currentVue = this;
            switch (switchAction) {
                case "initData":
                    currentVue.week = response.week;
                    currentVue.vote = response.vote;
                    for (let i = 0; i < currentVue.week.rounds.length; i++) {
                        currentVue.week.rounds[i].voting = currentVue.isInDate(currentVue.week.rounds[i].startDate, currentVue.week.rounds[i].endDate);
                    }
                    break;
                case 'saveVote':
                    currentVue.count = response.count;
                    $("#modalVote").modal("hide");
                    $("#modalResult").modal("show");
                    break;
                default:
                    break;
            }
        },
        initData: function () {
            let url = this.url + "/jsonGetActive";
            window.axios.post(url).then((response) => {
                this.switchResponseServer("initData", response.data);
            }).catch((error) => {
                toastr.error("Tuvimos problemas");
            }).finally((response) => {
            });
        },
        isInDate: function (start, end) {
            start = Date.parse(start);
            end = Date.parse(end);
            let now = Date.now();
            return now >= start && now <= end
        },
        initVote: function (round, idSinger) {
            this.round = round;
            this.vote.idRound = round.id;
            this.vote.idSinger = idSinger;
            this.vote.ip = '127.0.0.1';
            $("#modalVote").modal("show");
        },
        saveVote: function () {
            let currentVue = this;
            if (this.vote.document.length > 0 && this.vote.name.length > 0) {
                let url = this.url + "/jsonSaveVote";
                window.axios.post(url, {
                    vote: currentVue.vote
                }).then((response) => {
                    this.switchResponseServer("saveVote", response.data);
                }).catch((error) => {
                    toastr.error("Tuvimos problemas");
                }).finally((response) => {
                });
            } else {
                alert("Ingresar sus datos");
            }
        },
        getVotesCount: function (id) {
            let counter = this.count.filter(x => x.idSinger === id);
            if (counter.length === 0) return 0;
            return counter[0].total;
        },
        formatDate: function (dateToFormat) {
            console.log(dateToFormat);
            let dateArray = dateToFormat.split(" ");
            let days = dateArray[0].split("-");
            return days[2] + "/" + days[1] + "/" + days[0] + " " + dateArray[1];
        }
    },
    mounted() {
        this.initData();
    },
}

Vue.createApp(vueIndex).mount("#voting-page");
