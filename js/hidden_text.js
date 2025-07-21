(function () {

    const cropElement = document.querySelectorAll(".news__truncate-text"), // выбор элементов
          size = 23,                                            // кол-во символов
          endCharacter = "...";                                  // окончание

    cropElement.forEach(el => {
        let text = el.innerHTML;

        if (el.innerHTML.length > size) {
            text = text.substr(0, size);
            el.innerHTML = text + endCharacter;
        }
    });

}());