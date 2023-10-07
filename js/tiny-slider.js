import React, { useState, useEffect } from "react";
import "./App.css";

const App = () => {
    const [slides, setSlides] = useState([]);
    const [slideIndex, setSlideIndex] = useState(0);

    useEffect(() => {
        const getSlides = async () => {
            const response = await fetch("https://api.unsplash.com/photos/?client_id=YOUR_ACCESS_KEY");
            const data = await response.json();
            setSlides(data);
        };

        getSlides();
    }, []);

    const handlePrevClick = () => {
        setSlideIndex(prevIndex => prevIndex - 1);
    };

    const handleNextClick = () => {
        setSlideIndex(prevIndex => prevIndex + 1);
    };

    return (
        <div className="App">
            <div className="slides">
                {slides.map((slide, index) => (
                    <div
                        key={index}
                        className="slide"
                        style={{ backgroundImage: `url(${slide.urls.regular})` }}
                    />
                ))}
            </div>
            <div className="controls">
                <button onClick={handlePrevClick}>Prev</button>
                <button onClick={handleNextClick}>Next</button>
            </div>
        </div>
    );
};

export default App;
