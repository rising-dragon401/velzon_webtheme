<script>
    import { Dropdown, DropdownToggle, DropdownMenu, Row, Col } from "sveltestrap";
    import github from '../../assets/images/brands/github.png'
    import bitbucket from '../../assets/images/brands/bitbucket.png'
    import dribbble from '../../assets/images/brands/dribbble.png'
    import dropbox from '../../assets/images/brands/dropbox.png'
    import mail_chimp from '../../assets/images/brands/mail_chimp.png'
    import slack from '../../assets/images/brands/slack.png'
</script>

<Dropdown class="topbar-head-dropdown ms-1 header-item">
    <DropdownToggle
        type="button"
        color=""
        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle p-0 shadow-none"
    >
        <i class="bx bx-category-alt fs-22" />
    </DropdownToggle>
    <DropdownMenu class="dropdown-menu-lg p-0 dropdown-menu-end" end>
        <div
            class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border"
        >
            <Row class="align-items-center">
                <Col>
                    <h6 class="m-0 fw-semibold fs-15">Web Apps</h6>
                </Col>
                <Col xs="auto">
                    <a href="{null}" class="btn btn-sm btn-soft-info shadow-none">
                        View All Apps
                        <i class="ri-arrow-right-s-line align-middle" /></a
                    >
                    </Col>
            </Row>
        </div>

        <div class="p-2">
            <Row class="g-0">
                <Col>
                    <a class="dropdown-icon-item" href="{null}">
                        <img
                            src={github}
                            alt="Github"
                        />
                        <span>GitHub</span>
                    </a>
                </Col>
                <Col>
                    <a class="dropdown-icon-item" href="{null}">
                        <img
                            src={bitbucket}
                            alt="bitbucket"
                        />
                        <span>Bitbucket</span>
                    </a>
                </Col>
                <Col>
                    <a class="dropdown-icon-item" href="{null}">
                        <img
                            src={dribbble}
                            alt="dribbble"
                        />
                        <span>Dribbble</span>
                    </a>
                </Col>
            </Row>

            <div class="row g-0">
                <Col>
                    <a class="dropdown-icon-item" href="{null}">
                        <img
                            src={dropbox}
                            alt="dropbox"
                        />
                        <span>Dropbox</span>
                    </a>
                </Col>
                <Col>
                    <a class="dropdown-icon-item" href="{null}">
                        <img
                            src={mail_chimp}
                            alt="mail_chimp"
                        />
                        <span>Mail Chimp</span>
                    </a>
                </Col>
                <Col>
                    <a class="dropdown-icon-item" href="{null}">
                        <img
                            src={slack}
                            alt="slack"
                        />
                        <span>Slack</span>
                    </a>
                </Col>
            </div>
        </div>
    </DropdownMenu>
</Dropdown>
