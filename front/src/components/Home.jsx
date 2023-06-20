import React from 'react'
import cat from '../assets/cat.svg'

function Home() {
    return (
        <div>
            <div className="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
                <div className="col-md-6 p-lg-5 mx-auto my-5">
                    <img src={cat} className="bi" alt="gato negro" />
                    <h1 className="display-3 fw-bold">Colonias Felinas Picos de la Miel</h1>
                    <h3 className="fw-normal text-muted mb-3">Build anything you want with Aperture</h3>
                    <div className="d-flex gap-3 justify-content-center lead fw-normal">
                        <a clasNames="icon-link" href="#">
                            Learn more
                            {/* <svg className="bi"><use xlink: href="#chevron-right"></use></svg> */}
                        </a>
                        <a className="icon-link" href="#">
                            Buy
                            {/* <svg class="bi"><use xlink: href="#chevron-right"></use></svg> */}
                        </a>
                    </div>
                </div>
                <div className="product-device shadow-sm d-none d-md-block"></div>
                <div className="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>
    )
}

export default Home
