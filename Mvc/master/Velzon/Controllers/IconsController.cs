﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Velzon.Controllers
{
    public class IconsController : Controller
    {

        [ActionName("Remix")]
        public ActionResult Remix()
        {
            return View();
        }

        [ActionName("Boxicons")]
        public ActionResult Boxicons()
        {
            return View();
        }

        [ActionName("MaterialDesign")]
        public ActionResult MaterialDesign()
        {
            return View();
        }

        [ActionName("LineAwesome")]
        public ActionResult LineAwesome()
        {
            return View();
        }

        [ActionName("Feather")]
        public ActionResult Feather()
        {
            return View();
        }

        [ActionName("CryptoSVG")]
        public ActionResult CryptoSVG()
        {
            return View();
        }
    }
}
