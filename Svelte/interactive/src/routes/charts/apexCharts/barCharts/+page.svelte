<script>
	import {
		Card,
		CardBody,
		CardHeader,
		Col,
		Container,
		Row,
	} from "sveltestrap";
	import BreadCrumb from "../../../../Components/Common/BreadCrumb.svelte";
	import Basic from "./Basic.svelte";
	import CustomDataLabel from "./CustomDataLabel.svelte";
	import Stacked from "./Stacked.svelte";
	import Stacked2 from "./Stacked2.svelte";
	import Negative from "./Negative.svelte";
	import Markers from "./Markers.svelte";
	import Reversed from "./Reversed.svelte";
	import Patterned from "./Patterned.svelte";
	import Groupes from "./Groupes.svelte";
	import BarwithImages from "./BarwithImages.svelte";
</script>

<svelte:head>
	<title>Apex Bar Charts | Velzon - Svelte Admin & Dashboard Template</title>
</svelte:head>

<div class="page-content">
	<Container fluid>
		<BreadCrumb title="Bar Charts" pageTitle="Apexcharts" />
		<Row>
			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Basic Bar Chart</h4>
					</CardHeader>
					<CardBody>
						<Basic dataColors={["--vz-primary"]} />
					</CardBody>
				</Card>
			</Col>

			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Custom DataLabels Bar</h4>
					</CardHeader>
					<CardBody>
						<CustomDataLabel
							dataColors={[
								"--vz-primary",
								"--vz-secondary",
								"--vz-success",
								"--vz-info",
								"--vz-warning",
								"--vz-danger",
								"--vz-dark",
								"--vz-primary",
								"--vz-success",
								"--vz-secondary",
							]}
						/>
					</CardBody>
				</Card>
			</Col>
		</Row>

		<Row>
			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Stacked Bar Chart</h4>
					</CardHeader>
					<CardBody>
						<Stacked
							dataColors={[
								"--vz-primary",
								"--vz-success",
								"--vz-warning",
								"--vz-danger",
								"--vz-info",
							]}
						/>
					</CardBody>
				</Card>
			</Col>

			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Stacked Bars 100</h4>
					</CardHeader>
					<CardBody>
						<Stacked2
							dataColors={[
								"--vz-primary",
								"--vz-success",
								"--vz-warning",
								"--vz-danger",
								"--vz-info",
							]}
						/>
					</CardBody>
				</Card>
			</Col>
		</Row>

		<Row>
			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">
							Bar with Negative Values
						</h4>
					</CardHeader>
					<CardBody>
						<Negative
							dataColors={["--vz-primary", "--vz-info"]}
						/>
					</CardBody>
				</Card>
			</Col>

			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Bar with Markers</h4>
					</CardHeader>
					<CardBody>
						<Markers
							dataColors={["--vz-info", "--vz-primary"]}
						/>
					</CardBody>
				</Card>
			</Col>
		</Row>

		<Row>
			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Reversed Bar Chart</h4>
					</CardHeader>
					<CardBody>
						<Reversed dataColors={["--vz-primary"]} />
					</CardBody>
				</Card>
			</Col>

			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Patterned Chart</h4>
					</CardHeader>
					<CardBody>
						<Patterned
							dataColors={[
								"--vz-primary",
								"--vz-success",
								"--vz-warning",
								"--vz-danger",
							]}
						/>
					</CardBody>
				</Card>
			</Col>
		</Row>

		<Row>
			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Grouped Bar Chart</h4>
					</CardHeader>
					<CardBody>
						<Groupes
							dataColors={["--vz-primary", "--vz-info"]}
						/>
					</CardBody>
				</Card>
			</Col>

			<Col lg={6}>
				<Card>
					<CardHeader>
						<h4 class="card-title mb-0">Bar with Images</h4>
					</CardHeader>
					<CardBody>
						<BarwithImages />
					</CardBody>
				</Card>
			</Col>
		</Row>
	</Container>
</div>
