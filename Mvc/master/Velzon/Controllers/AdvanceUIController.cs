﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Velzon.Controllers
{
    public class AdvanceUIController : Controller
    {

        [ActionName("SweetAlerts")]
        public ActionResult SweetAlerts()
        {
            return View();
        }

        [ActionName("NestableList")]
        public ActionResult NestableList()
        {
            return View();
        }

        [ActionName("Scrollbar")]
        public ActionResult Scrollbar()
        {
            return View();
        }

        [ActionName("Animation")]
        public ActionResult Animation()
        {
            return View();
        }

        [ActionName("Tour")]
        public ActionResult Tour()
        {
            return View();
        }

        [ActionName("SwiperSlider")]
        public ActionResult SwiperSlider()
        {
            return View();
        }

        [ActionName("Ratings")]
        public ActionResult Ratings()
        {
            return View();
        }

        [ActionName("Highlight")]
        public ActionResult Highlight()
        {
            return View();
        }

        [ActionName("ScrollSpy")]
        public ActionResult ScrollSpy()
        {
            return View();
        }

    }
}
