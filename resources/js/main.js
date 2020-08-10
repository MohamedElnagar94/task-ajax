$(document).ready(function () {
    axios.get("api/countries").then((response) => {
        let data = response.data.countries;
        let countriesSelect = $(".js-single");
        data.forEach((value) => {
            let optionElement = document.createElement("option");
            optionElement.value = value.id;
            optionElement.innerHTML = value.name;
            countriesSelect.append(optionElement);
        });
        $("#countries").on("change", () => {
            let id = $('.js-single').select2('data')[0].id;
            let country = data.filter((item) => item.id == id)[0];
            let children = $(".allCountries");
            let htmlTable = `
                <tr>
                    <th scope="row">${children.children().length + 1}</th>
                    <td>${country.name}</td>
                    <td>${country.capital}</td>
                    <td>${country.region}</td>
                    <td>${country.population}</td>
                </tr>
            `;
            children.append(htmlTable);
         //    console.log(data)
        })
        // console.log(data);
    }).catch(() => {

    }).finally(() => {
        $('.js-single').select2();
    });
});