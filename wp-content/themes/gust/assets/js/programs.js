document.addEventListener("DOMContentLoaded", function () {
    const programBlocks = document.querySelectorAll(".programs-block-content");
    const programPrevButton = document.getElementById("prevButton");
    const programNextButton = document.getElementById("nextButton");
    const programsCounter = document.querySelector(
        ".programs-slider-counter-block-color"
    );
    const programsSliderCounterText = document.querySelector(
        ".programs-slider-counter-text"
    );

    // Функция для определения ширины maxColorWidth в зависимости от размера экрана
    function getMaxColorWidth() {
        if (window.innerWidth >= 1280) {
            return 240; // Ширина для устройств от 1280px и выше
        } else if (window.innerWidth >= 768) {
            return 120; // Ширина для устройств от 768px до 1279px
        } else {
            return 72; // Ширина для мобильных устройств
        }
    }

    // Находим индекс активного слайда по классам
    function findActiveSlideIndex() {
        for (let i = 0; i < programBlocks.length; i++) {
            if (programBlocks[i].classList.contains("active")) {
                return i;
            }
        }
        // Если активный слайд не найден, возвращаем 0 (первый слайд)
        return 0;
    }

    // Функция для отображения активных слайдов
    function showSlide(index) {
        programBlocks.forEach((block, i) => {
            if (i === index) {
                block.classList.add("active");
            } else {
                block.classList.remove("active");
            }
        });

        updateCounterBlockColorWidth(index, programBlocks.length);
        updateCounterText(index);
    }

    function updateCounterText(slideIndex) {
        let slideNumber = (slideIndex + 1).toString().padStart(2, "0");
        programsSliderCounterText.textContent = slideNumber;
    }

    function updateCounterBlockColorWidth(slideIndex, slidesLength) {
        const maxColorWidth = getMaxColorWidth();
        const colorWidth = (slideIndex + 1) * (maxColorWidth / slidesLength);
        programsCounter.style.width = colorWidth + "px";
    }

    // Функция для переключения на предыдущий слайд
    function prevSlide() {
        let currentSlideIndex = findActiveSlideIndex();
        currentSlideIndex =
            (currentSlideIndex - 1 + programBlocks.length) % programBlocks.length;
        showSlide(currentSlideIndex);
    }

    // Функция для переключения на следующий слайд
    function nextSlide() {
        let currentSlideIndex = findActiveSlideIndex();
        currentSlideIndex = (currentSlideIndex + 1) % programBlocks.length;
        showSlide(currentSlideIndex);
    }

    // Назначаем обработчики событий для кнопок
    programPrevButton.addEventListener("click", prevSlide);
    programNextButton.addEventListener("click", nextSlide);

    // Показываем первый слайд при загрузке страницы
    showSlide(0);

    // Обновляем ширину при изменении размера окна
    window.addEventListener("resize", function () {
        updateCounterBlockColorWidth(findActiveSlideIndex(), programBlocks.length);
    });
});
